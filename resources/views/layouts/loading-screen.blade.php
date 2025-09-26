{{-- resources/views/components/loading-screen.blade.php --}}

<div id="loadingScreen" class="fixed inset-0 bg-gray-900/95 backdrop-blur-sm z-50 flex items-center justify-center transition-opacity duration-500 opacity-0 pointer-events-none">
    
    <!-- Sliding Bar Style -->
    <div class="flex flex-col items-center">
        <div class="mb-6 text-center">
            <h3 class="text-white text-xl font-semibold">Loading...</h3>
            <p class="text-gray-400 text-sm mt-1">Please wait a moment</p>
        </div>
        
        <!-- Option 1: Sliding Bar (Minimal) -->
        <div class="relative w-64 h-1 bg-gray-700 rounded-full overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-cyan-400 to-transparent w-1/3 rounded-full animate-slide-right"></div>
        </div>
    </div>
    
</div>

<style>
@keyframes slide-right {
    0% { transform: translateX(-100%); }
    50% { transform: translateX(100%); }
    100% { transform: translateX(300%); }
}

.animate-slide-right {
    animation: slide-right 1.5s ease-in-out infinite;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loadingScreen = document.getElementById('loadingScreen');
    
    // Function to show loader
    window.showLoader = function() {
        loadingScreen.classList.remove('opacity-0', 'pointer-events-none');
        loadingScreen.classList.add('opacity-100');
    }
    
    // Function to hide loader
    window.hideLoader = function() {
        loadingScreen.classList.add('opacity-0', 'pointer-events-none');
        loadingScreen.classList.remove('opacity-100');
    }
    
    // Intercept all navigation clicks
    document.addEventListener('click', function(e) {
        const link = e.target.closest('a[href]');
        if (link && !link.target && !link.href.startsWith('#') && !link.href.includes('javascript:')) {
            // Show loader when navigating
            showLoader();
        }
    });
    
    // Hide loader when page loads
    window.addEventListener('load', function() {
        setTimeout(() => {
            hideLoader();
        }, 500);
    });
    
    // For SPA-like behavior (if using Livewire/Alpine)
    document.addEventListener('livewire:navigating', function() {
        showLoader();
    });
    
    document.addEventListener('livewire:navigated', function() {
        setTimeout(() => {
            hideLoader();
        }, 300);
    });
});
</script>