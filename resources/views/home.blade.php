<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edukasi4ID</title>
  <style>
    /* Reset and base */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #000;
      line-height: 1.5;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      max-width: 100vw; /* Prevent horizontal overflow */
      overflow-x: hidden; /* Hide any horizontal overflow */
    }

    main.container {
      flex: 1;
      padding-bottom: 0;
    }

    footer {
      margin-top: 0;
      width: 100%;
      max-width: 100vw; /* Ensure fits viewport */
      overflow-x: hidden; /* Prevent overflow */
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Container for page */
    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 20px 60px;
      width: 100%;
    }

    /* Header & Navigation */
    header {
      background-color: #fff;
      border-bottom: 1px solid #ddd;
      padding: 12px 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    /* Logo */
    .logo {
      display: flex;
      align-items: center;
      font-weight: 700;
      font-size: 2rem;
      color: #69cae8;
      letter-spacing: -0.04em;
    }

    .logo svg {
      width: 40px;
      height: 40px;
      margin-right: 6px;
      fill: #69cae8;
    }

    /* Nav Menu */
    nav {
      display: flex;
      align-items: center;
      gap: 24px;
      font-weight: 600;
      font-size: 1rem;
    }

    nav ul {
      list-style-type: none;
      display: flex;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      margin-right: 20px;
    }

    nav a {
      color: #000;
      position: relative;
      padding: 8px 14px;
      border-radius: 8px;
      transition: background-color 0.3s ease;
    }

    nav a.active,
    nav a:hover {
      background-color: #69cae8;
      color: #fff;
      font-weight: 700;
      box-shadow: 0 4px 10px rgb(105 202 232 / 0.3);
    }

    /* Hero Section */
    .hero {
      background-color: #000;
      padding: 70px 40px;
      color: #fff;
      margin-top: 20px;
      border-radius: 0 0 8px 8px;
      height: 400px;
      position: relative;
      overflow: hidden;
    }

    /* Hero Slideshow Container */
    .hero-slideshow {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 1;
    }

    /* Individual Hero Slide */
    .hero-slide {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      opacity: 0;
      transition: opacity 1s ease-in-out;
    }

    .hero-slide.active {
      opacity: 0.8; /* Slight transparency so text remains readable */
    }

    /* Hero Content (Text) */
    .hero-content {
      position: relative;
      z-index: 3;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .hero-content h1 {
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 16px;
      line-height: 1.3;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .hero-content p {
      font-weight: 600;
      font-size: 1rem;
      max-width: 520px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
    }

    /* Hero Navigation Dots */
    .hero-dots {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 10px;
      z-index: 4;
    }

    .hero-dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: all 0.3s ease;
      border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .hero-dot.active {
      background: #69cae8;
      border-color: #69cae8;
      box-shadow: 0 0 10px rgba(105, 202, 232, 0.5);
    }

    .hero-dot:hover {
      background: rgba(255, 255, 255, 0.8);
      transform: scale(1.1);
    }

    /* Responsive adjustments for hero */
    @media (max-width: 768px) {
      .hero {
        padding: 40px 24px;
      }

      .hero-content h1 {
        font-size: 1.8rem;
      }

      .hero-dots {
        bottom: 15px;
        gap: 8px;
      }

      .hero-dot {
        width: 10px;
        height: 10px;
      }
    }

    .hero h1 {
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 16px;
      line-height: 1.3;
    }

    .hero p {
      font-weight: 600;
      font-size: 1rem;
      max-width: 520px;
    }

    /* About Section - Content Side by Side */
    .about-section {
      margin-top: 40px;
      display: flex;
      justify-content: space-between;
      gap: 40px;
      align-items: center;
      flex-wrap: wrap;
      padding: 16px;
    }

    .about-logo {
      padding: min(5em, 8%);
      flex: 1 1 280px;
      background-color: #000;
      border-radius: 1em;
      height: 230px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 1.5rem;
      box-shadow: 0 6px 15px rgb(0 0 0 / 0.4);
    }

    .about-text {
      flex: 1 1 450px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: flex-start;
      padding: 10px 0;
    }

    .about-text h2 {
      font-size: clamp(20px, 2.5vw, 40px);
      font-weight: 800;
      margin-bottom: 10px;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.18);
      text-align: left;
    }

    .about-text h2 span {
      color: #69cae8;
    }

    .about-text p {
      font-weight: 600;
      font-size: clamp(14px, 2.2vw, 16px);
      max-width: 480px;
      line-height: 1.4;
      letter-spacing: 0.02em;
      text-align: left;
      word-wrap: break-word;
      white-space: normal;
      overflow-wrap: break-word;
    }

    /* Glass Card Section */
    .glass-card-section {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 400px;
      padding: 40px 20px;
      gap: 20px;
    }

    .glass-card {
      position: relative;
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      padding: 40px;
      max-width: 900px;
      width: 100%;
      overflow: hidden;
    }

    .glass-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg,
        rgba(105, 202, 232, 0.1) 0%,
        rgba(255, 255, 255, 0.05) 25%,
        rgba(105, 202, 232, 0.08) 50%,
        rgba(255, 255, 255, 0.03) 75%,
        rgba(105, 202, 232, 0.06) 100%);
      border-radius: 20px;
      z-index: 1;
    }

    .glass-card::after {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg,
        transparent,
        rgba(255, 255, 255, 0.1),
        transparent,
        rgba(255, 255, 255, 0.05),
        transparent);
      border-radius: 22px;
      z-index: 0;
    }

    .glass-card-content {
      position: relative;
      z-index: 2;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: start;
    }

    .glass-card-column {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .glass-card-item {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      padding: 15px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
    }

    .glass-card-item:hover {
      background: rgba(255, 255, 255, 0.15);
      transform: translateY(-2px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      border-color: rgba(105, 202, 232, 0.3);
    }

    .glass-card-icon {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: linear-gradient(135deg, #69cae8, #357ABD);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 12px;
      font-weight: bold;
      flex-shrink: 0;
      margin-top: 2px;
      box-shadow: 0 4px 12px rgba(105, 202, 232, 0.3);
    }

    .glass-card-text {
      color: #333;
      font-size: 0.95rem;
      font-weight: 600;
      line-height: 1.4;
      text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
    }

    .glass-card-particle {
      position: absolute;
      width: 4px;
      height: 4px;
      background: rgba(105, 202, 232, 0.6);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite;
    }

    .glass-card-particle:nth-child(1) {
      top: 20%;
      left: 20%;
      animation-delay: 0s;
    }

    .glass-card-particle:nth-child(2) {
      top: 60%;
      left: 80%;
      animation-delay: 2s;
    }

    .glass-card-particle:nth-child(3) {
      top: 80%;
      left: 30%;
      animation-delay: 4s;
    }

    @keyframes float {
      0%,
      100% {
        transform: translateY(0px) scale(1);
        opacity: 0.7;
      }

      50% {
        transform: translateY(-10px) scale(1.1);
        opacity: 1;
      }
    }

    /* --- Carousel Styles --- */
    .ruanglingkup-carousel-wrapper {
      margin-top: 60px;
      margin-bottom: 40px;
    }

    .ruanglingkup-carousel-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 50px;
      text-align: center;
    }

    .carousel-container {
      position: relative;
      width: 100%;
      max-width: 1200px;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      perspective: 1000px;
      overflow: hidden;
      margin: 0 auto;
    }

    .carousel-track {
      position: relative;
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.5s ease;
    }

    .card {
      position: absolute;
      width: 250px;
      height: 300px;
      border-radius: 15px;
      background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%);
      cursor: pointer;
      transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      box-shadow: 0 8px 25px rgba(74, 144, 226, 0.3);
      overflow: hidden;
      transform-style: preserve-3d;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 600;
      font-size: 1.1rem;
      text-align: center;
      padding: 20px;
    }

    .card::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), transparent, rgba(255, 255, 255, 0.1));
      border-radius: 15px;
      z-index: 1;
    }

    .card-content {
      position: relative;
      z-index: 2;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 15px;
    }

    .card-logo-circle {
      width: 60px;
      height: 60px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.3);
    }

    .card-logo-circle svg {
      width: 30px;
      height: 30px;
      fill: white;
    }

    .card-title {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 8px;
      text-align: center;
    }

    .card-description {
      font-size: 0.85rem;
      font-weight: 400;
      text-align: center;
      line-height: 1.3;
      opacity: 0.9;
    }

    .card.active {
      transform: translateX(0) translateZ(0) rotateY(0deg) scale(1);
      z-index: 10;
      box-shadow: 0 15px 35px rgba(74, 144, 226, 0.4);
    }

    .card.prev {
      transform: translateX(-200px) translateZ(-100px) rotateY(15deg) scale(0.85);
      z-index: 5;
      opacity: 0.8;
    }

    .card.next {
      transform: translateX(200px) translateZ(-100px) rotateY(-15deg) scale(0.85);
      z-index: 5;
      opacity: 0.8;
    }

    .card.far-left {
      transform: translateX(-350px) translateZ(-200px) rotateY(25deg) scale(0.7);
      z-index: 2;
      opacity: 0.6;
    }

    .card.far-right {
      transform: translateX(350px) translateZ(-200px) rotateY(-25deg) scale(0.7);
      z-index: 2;
      opacity: 0.6;
    }

    .card.hidden {
      transform: translateX(0) translateZ(-400px) rotateY(0deg) scale(0.4);
      z-index: 1;
      opacity: 0.3;
    }

    .nav-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      width: 50px;
      height: 50px;
      background: rgba(255, 255, 255, 0.9);
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 1.5rem;
      color: #333;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      z-index: 100;
    }

    .nav-arrow:hover {
      background: white;
      transform: translateY(-50%) scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .nav-arrow.left {
      left: 20px;
    }

    .nav-arrow.right-1 {
      right: 20px;
    }

    .dots-container {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 40px;
    }

    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #ddd;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dot.active {
      background: #4A90E2;
      transform: scale(1.2);
    }

    .dot:hover {
      background: #6BA3F0;
    }

    .card:nth-child(1) {
      background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%);
    }

    .card:nth-child(2) {
      background: linear-gradient(135deg, #5CB3CC 0%, #4A90E2 100%);
    }

    .card:nth-child(3) {
      background: linear-gradient(135deg, #45B7D1 0%, #357ABD 100%);
    }

    .card:nth-child(4) {
      background: linear-gradient(135deg, #4A90E2 0%, #5CB3CC 100%);
    }

    .card:nth-child(5) {
      background: linear-gradient(135deg, #357ABD 0%, #45B7D1 100%);
    }

    .card:nth-child(6) {
      background: linear-gradient(135deg, #5CB3CC 0%, #4A90E2 100%);
    }

    .card:nth-child(7) {
      background: linear-gradient(135deg, #45B7D1 0%, #357ABD 100%);
    }

    .card:nth-child(8) {
      background: linear-gradient(135deg, #4A90E2 0%, #5CB3CC 100%);
    }

    .card:nth-child(9) {
      background: linear-gradient(135deg, #357ABD 0%, #45B7D1 100%);
    }

    .card:nth-child(10) {
      background: linear-gradient(135deg, #5CB3CC 0%, #4A90E2 100%);
    }

    /* Kolaborasi Section */
    .kolaborasi-section {
      margin-bottom: 60px;
    }

    .kolaborasi-main-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 50px;
      text-align: center;
    }

    .kolaborasi-subsection {
      margin-top: 60px;
      text-align: center;
    }

    .kolaborasi-header h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 30px;
    }

    .kolaborasi-carousel-container {
      position: relative;
      width: 100%;
      max-width: 900px;
      margin: 0 auto;
      overflow: hidden;
      padding: 20px 0;
    }

    .kolaborasi-carousel {
      display: flex;
      transition: transform 0.5s cubic-bezier(.77, 0, .18, 1);
      gap: 32px;
    }

    .kolaborasi-slide {
      width: 252.19px;
      min-width: 252.19px;
      height: 176.81px;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 16px;
      box-sizing: border-box;
      transition: box-shadow 0.3s;
    }

    .kolaborasi-slide img {
      max-width: 100%;
      max-height: 120px;
      object-fit: contain;
      display: block;
      margin: 0 auto;
    }

    .kolaborasi-indicators {
      display: flex;
      justify-content: center;
      gap: 8px;
      margin-top: 18px;
    }

    .kolaborasi-indicators .indicator {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: #ddd;
      cursor: pointer;
      transition: background 0.3s;
    }

    .kolaborasi-indicators .indicator.active {
      background: #4A90E2;
    }

    .glass-card-section-map {
      margin-top: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .glass-card-map {
      position: relative;
      background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      border-radius: 20px;
      border: 1px solid rgba(255, 255, 255, 0.18);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      padding: 40px;
      max-width: 700px;
      overflow: hidden;
      display: grid; /* Grid for desktop side-by-side */
      grid-template-columns: 1fr 1fr;
      gap: 40px;
      align-items: center;
      width: 100%;
    }

    .glass-card-text-map {
      color: #333;
      font-weight: 600;
      line-height: 1.4;
      text-shadow: 0 1px 2px rgba(255, 255, 255, 0.8);
    }

    .map-contact-wrapper {
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      header {
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
      }

      nav {
        gap: 14px;
        font-size: 0.9rem;
      }

      .hero {
        padding: 40px 24px;
      }

      .hero h1 {
        font-size: 1.8rem;
      }

      .about-section {
        flex-direction: column;
        gap: 30px;
        align-items: center;
        text-align: center;
      }

      .about-logo,
      .about-text {
        flex-basis: 100%;
        max-width: 100%;
      }

      .about-logo {
        height: 160px;
        font-size: 1.3rem;
        margin: 0 auto;
      }

      .about-text {
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
        width: 100%;
      }

      .about-text h2 {
        font-size: clamp(18px, 2.2vw, 32px);
        margin-bottom: 8px;
        margin-top: 0;
        position: static;
      }

      .about-text p {
        font-weight: 270;
        font-size: clamp(14px, 2.2vw, 16px);
        line-height: 1.2;
        letter-spacing: 0.01em;
        max-width: 100%;
        position: static;
      }

      .glass-card-section {
        margin-top: 15px;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        min-height: auto;
        padding: 20px 0;
      }

      .image-card {
        width: 100%;
        display: flex;
        justify-content: center;
      }

      .img-robot {
        max-width: 80%;
        height: auto;
        object-fit: contain;
        margin: 0 auto;
      }

      .glass-card {
        max-width: 100%;
        height: auto;
        padding: 20px;
        margin: 20px 0;
      }

      .glass-card-content {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .glass-card-column {
        gap: 15px;
      }

      .glass-card-item {
        gap: 10px;
        padding: 14px;
        width: 100%;
        min-height: auto;
      }

      .glass-card-text {
        font-size: 0.85rem;
        font-weight: 500;
        line-height: 1.2;
      }

      .ruanglingkup-carousel-title {
        font-size: 1.4rem;
        margin-bottom: 12px;
        text-align: center;
      }

      .carousel-container {
        height: 200px;
        max-width: 100%;
        margin: 0 auto;
      }

      .card {
        width: 150px;
        height: 200px;
        font-size: 0.9rem;
      }

      .card-logo-circle {
        width: 30px;
        height: 30px;
      }

      .card-logo-circle svg {
        width: 15px;
        height: 15px;
      }

      .card-title {
        font-size: 0.85rem;
        margin-bottom: 1px;
      }

      .card-description {
        font-size: 0.65rem;
      }

      .card.prev {
        transform: translateX(-70px) translateZ(-80px) rotateY(10deg) scale(0.8);
      }

      .card.next {
        transform: translateX(70px) translateZ(-80px) rotateY(-10deg) scale(0.8);
      }

      .card.far-left {
        transform: translateX(-130px) translateZ(-150px) rotateY(20deg) scale(0.6);
      }

      .card.far-right {
        transform: translateX(130px) translateZ(-150px) rotateY(-20deg) scale(0.6);
      }

      .nav-arrow {
        width: 30px;
        height: 30px;
        font-size: 1.2rem;
      }

      .nav-arrow.left {
        left: 10px;
      }

      .nav-arrow.right-1 {
        right: 10px;
      }

      .dots-container {
        justify-content: center;
        margin-top: 20px;
      }

      .kolaborasi-main-title {
        font-size: 2rem;
        margin-bottom: 25px;
        text-align: center;
      }

      .kolaborasi-section {
        padding: 10px;
        text-align: center;
      }

      .kolaborasi-subsection {
        margin-bottom: 20px;
        text-align: center;
      }

      .kolaborasi-header h2 {
        font-size: 1.4rem;
      }

      .kolaborasi-carousel-container {
        margin-top: 15px;
        max-width: 100%;
      }

      .kolaborasi-carousel {
        gap: 15px;
      }

      .kolaborasi-slide {
        min-width: 150px;
        height: auto;
      }

      .kolaborasi-slide img {
        max-width: 80%;
      }

      .nav-arrow.left {
        left: 10px;
      }

      .nav-arrow.right {
        right: 10px;
      }

      .kolaborasi-indicators {
        margin-top: 5px;
      }

      .kolaborasi-indicators .indicator {
        width: 6px;
        height: 6px;
        margin: 0 3px;
      }

      .glass-card-section-map {
        margin-top: 40px;
        padding: 20px;
      }

      .glass-card-map {
        display: flex; /* Switch to flex column for mobile stacking */
        flex-direction: column;
        gap: 20px;
        max-width: 100%;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      }

      .glass-card-map iframe {
        width: 100%;
        height: 300px;
        border-radius: 10px;
      }

      .glass-card-map > div:nth-child(2) {
        flex-direction: column;
        gap: 15px;
        width: 100%;
      }

      .glass-card-text-map {
        font-size: 0.9rem;
        text-align: center;
      }
    }

    @media (min-width: 769px) {
      .nav-arrow.right {
        font-size: 2rem;
        background: rgba(255, 255, 255, 0.8);
        padding: 12px;
        right: 10px;
      }

      .nav-arrow.right:hover {
        background: rgba(255, 255, 255, 1);
      }

      .glass-card-map iframe {
        height: 220px; /* Restore original desktop height */
      }

      .glass-card-section {
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        min-height: 400px;
      }

      .image-card {
        flex: 0 0 300px;
      }

      .img-robot {
        width: 100%;
        height: auto;
      }

      .glass-card {
        flex: 1;
        max-width: none;
        margin-left: 20px;
      }
    }
  </style>
</head>

<body>
  @include('navbar')
  <section class="hero" aria-label="Introduction headline" id="heroSection">
      @if($heroImages && $heroImages->count() > 0)
        <!-- Hero Images Slideshow -->
        <div class="hero-slideshow">
          @foreach($heroImages as $index => $image)
            <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" 
                 style="background-image: url('{{ asset('storage/'.$image->image) }}');">
            </div>
          @endforeach
        </div>
        <!-- woy pusing woy -->
        @if($heroImages->count() > 1)
          <div class="hero-dots">
            @foreach($heroImages as $index => $image)
              <span class="hero-dot {{ $index === 0 ? 'active' : '' }}" onclick="goToHeroSlide({{ $index }})"></span>
            @endforeach
          </div>
        @endif
      @endif
      
      <!-- Hero Content (Text) -->
      <div class="hero-content">
        <h1>Transformasikan Hidup Anda Melalui<br />Pendidikan Terbaik</h1>
        <p>Menjadi Lembaga Konsultan Pendidikan dan Pelatihan Pengembangan Diri dan Organisasi yang Profesional di Indonesia</p>
      </div>
    </section>

  <main class="container" aria-label="Main content area">
    <section class="about-section" aria-labelledby="about-title">
      <div class="about-text">
        <h2 id="about-title">Tentang <span>Edukasi4ID</span></h2>
        <p>
          Edukasi4ID adalah platform yang dibentuk oleh para praktisi Teknologi Informasi dan Komunikasi yang berkomitmen kuat terhadap pengembangan pendidikan vokasi di Indonesia.
        </p>
      </div>
      <!-- Glass Card Section -->
      <div class="glass-card-section">
        <!-- New card for image on the right (moved to left for mockup match) -->
        <div class="image-card">
          <div class="image-card-content">
            <img class="img-robot" src="robot1.png" alt="Your Image">
          </div>
        </div>
        <!-- Left card (existing content) -->
        <div class="glass-card">
          <div class="glass-card-content">
            <!-- Kolom Pertama -->
            <div class="glass-card-column">
              <div class="glass-card-item">
                <span class="glass-card-icon">1</span>
                <span class="glass-card-text">Membantu Sekolah Menengah Kejuruan (SMK) dalam pelaksanaan prakerin</span>
              </div>
              <div class="glass-card-item">
                <span class="glass-card-icon">2</span>
                <span class="glass-card-text">Menyelenggarakan pelatihan SDM secara profesional</span>
              </div>
              <div class="glass-card-item">
                <span class="glass-card-icon">3</span>
                <span class="glass-card-text">Menyediakan kegiatan Uji Kompetensi berbasis industri</span>
              </div>
              <div class="glass-card-item">
                <span class="glass-card-icon">4</span>
                <span class="glass-card-text">Mengembangkan inovasi dalam pembelajaran teknologi</span>
              </div>
            </div>
            <!-- Kolom Kedua -->
            <div class="glass-card-column">
              <div class="glass-card-item">
                <span class="glass-card-icon">5</span>
                <span class="glass-card-text">Menyusun kurikulum sesuai kebutuhan industri</span>
              </div>
              <div class="glass-card-item">
                <span class="glass-card-icon">6</span>
                <span class="glass-card-text">Memberikan akses materi dan pelatihan terkini</span>
              </div>
              <div class="glass-card-item">
                <span class="glass-card-icon">7</span>
                <span class="glass-card-text">Memfasilitasi kerja sama dengan dunia industri</span>
              </div>
              <div class="glass-card-item">
                <span class="glass-card-icon">8</span>
                <span class="glass-card-text">Menyediakan konsultasi dan bimbingan karir</span>
              </div>
            </div>
          </div>
          <!-- Floating particles -->
          <div class="glass-card-particle"></div>
          <div class="glass-card-particle"></div>
          <div class="glass-card-particle"></div>
        </div>
      </div>
    </section>

    <div class="ruanglingkup-carousel-wrapper">
      <h1 class="ruanglingkup-carousel-title">Ruang Lingkup</h1>
      <div class="carousel-container">
        <button class="nav-arrow left" onclick="prevCard()">‹</button>
        <button class="nav-arrow right-1" onclick="nextCard()">›</button>
        <div class="carousel-track">
          <div class="card active">
            <!-- Workshop IT -->
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z" />
                </svg>
              </div>
              <div class="card-title">Workshop IT</div>
              <div class="card-description">Program IT meliputi Office Specialist, Networking, Programing (web/app), Desain, dan 2D/3D animasi.</div>
            </div>
          </div>
          <div class="card next">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M8 6V4c0-1.1.9-2 2-2h4c1.1 0 2 .9 2 2v2h4c1.1 0 2 .9 2 2v10c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V8c0-1.1.9-2 2-2h4zM10 4v2h4V4h-4zm10 6H4v8h16v-8z" />
                  <path d="M11 12h2v2h-2v-2z" />
                </svg>
              </div>
              <div class="card-title">Prakerin</div>
              <div class="card-description">Praktek Kerja Industri Bagi Siswa-siswi Sekolah Menengah Kejuruan di Perusahaan / Industri yang bekerja sama dengan Edukasi4ID.</div>
            </div>
          </div>
          <div class="card hidden">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M4 3h16c1.1 0 2 .9 2 2v10c0 1.1-.9 2-2 2h-6l-2 4-2-4H4c-1.1 0-2-.9-2-2V5c0-1.1.9-2 2-2zm16 12V5H4v10h16z" />
                  <path d="M6 7h8v2H6V7zm0 3h6v1H6v-1zm0 2h4v1H6v-1z" />
                  <path d="M16 8.5c0 1.38-1.12 2.5-2.5 2.5S11 9.88 11 8.5 12.12 6 13.5 6 16 7.12 16 8.5z" />
                  <path d="M13.5 7.5l.5 1h1l-.8.6.3 1-.5-.4-.5.4.3-1-.8-.6h1l.5-1z" />
                </svg>
              </div>
              <div class="card-title">Setifikasi Industri Dan Internasional</div>
              <div class="card-description">Uji Kompetensi berbasis industri dan internasional (Adobe, Microsoft, ITS, LO, RedHat, dll) .</div>
            </div>
          </div>
          <div class="card far-left">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3zm6 16h-2v-4H8v4H6v-6.83l6-5.33 6 5.33V19z" />
                  <path d="M7 10.5h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2z" />
                </svg>
              </div>
              <div class="card-title">Kelas Industri</div>
              <div class="card-description">pengadaan laboratorium/bengkel serta alat-alat praktek yang sesuai dengan standar industri, guna meningkatkan kompetensi.</div>
            </div>
          </div>
          <div class="card far-right">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.09a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.09c.7 0 1.3-.4 1.51-1a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06c.46.46 1.12.6 1.82.33h.06a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.09c0 .7.4 1.3 1 1.51.7.27 1.36.13 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82v.06c.27.7 .87 1.2 1.57 1.2H21a2 2 0 1 1 0 4h-.09c-.7 0-1.3.4-1.51 1z" />
                </svg>
              </div>
              <div class="card-title">Penyaluran Tenaga Kerja</div>
              <div class="card-description">Penempatan kesempatan kerja yang luas dan relevan untuk lulusan sekolah menengah kejuruan.</div>
            </div>
          </div>
          <div class="card hidden">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                </svg>
              </div>
              <div class="card-title">Magang Guru IT</div>
              <div class="card-description">Program pelatihan kerja yang dilakukan oleh guru untuk meningkatkan kompetensi Guru dan Trend teknologi di industri</div>
            </div>
          </div>
          <div class="card hidden">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M12 2L2 7v3h2v10h16V10h2V7L12 2zm6 16h-2v-6h-8v6H6v-8l6-4 6 4v8z" />
                  <path d="M7 11h2v2H7v-2zm4 0h2v2h-2v-2zm4 0h2v2h-2v-2z" />
                  <path d="M10 15h4v3h-4v-3z" />
                  <path d="M11 3h2v2h-2V3z" />
                </svg>
              </div>
              <div class="card-title">Konsultasi Pengambangan Sekolah</div>
              <div class="card-description">Pengembangan aplikasi mobile untuk pembelajaran yang dapat diakses kapan saja</div>
            </div>
          </div>
          <div class="card prev">
            <div class="card-content">
              <div class="card-logo-circle">
                <svg viewBox="0 0 24 24">
                  <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zM6 20V4h7v5h5v11H6zm3-7h6v2H9v-2zm0 4h6v2H9v-2zm0-8h3v2H9V9z" />
                </svg>
              </div>
              <div class="card-title">Sertifikasi LSP P3 </div>
              <div class="card-description">penyelenggaraan Informatika Signal Teknindo.lspsignal.id sertifikasi ini menjamin kompetensi peserta diakui oleh industri IT.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="dots-container" id="dotsContainer">
        <!-- dots will be generated by js -->
      </div>
    </div>

    <!-- Kolaborasi Section -->
    <section class="kolaborasi-section">
      <h1 class="kolaborasi-main-title">Kolaborasi</h1>
      <div class="kolaborasi-subsection" id="perusahaan-section">
        <div class="kolaborasi-header">
          <h2>Perusahaan</h2>
        </div>
        <div class="kolaborasi-carousel-container">
          <button class="nav-arrow left" onclick="moveKolaborasiSlide(-1, 'perusahaan')">‹</button>
          <div class="kolaborasi-carousel" id="perusahaan-carousel">
            @foreach($kolaborasiPerusahaan as $item)
              <div class="kolaborasi-slide">
                <img src="{{ asset('storage/'.$item->logo) }}" alt="{{ $item->nama }}">
              </div>
            @endforeach
          </div>
          <button class="nav-arrow right" onclick="moveKolaborasiSlide(1, 'perusahaan')">›</button>
        </div>
        <div class="kolaborasi-indicators" id="perusahaan-indicators"></div>
      </div>

      <div class="kolaborasi-subsection" id="akademisi-section">
        <div class="kolaborasi-header">
          <h2>Akademisi</h2>
        </div>
        <div class="kolaborasi-carousel-container">
          <button class="nav-arrow left" onclick="moveKolaborasiSlide(-1, 'akademisi')">‹</button>
          <div class="kolaborasi-carousel" id="akademisi-carousel">
            @foreach($kolaborasiAkademisi as $item)
              <div class="kolaborasi-slide">
                <img src="{{ asset('storage/'.$item->logo) }}" alt="{{ $item->nama }}">
              </div>
            @endforeach
          </div>
          <button class="nav-arrow right" onclick="moveKolaborasiSlide(1, 'akademisi')">›</button>
        </div>
        <div class="kolaborasi-indicators" id="akademisi-indicators"></div>
      </div>
    </section>

    <!-- Maps & Kontak Section -->
    <section class="glass-card-section-map" style="margin-top:60px;">
      <div class="glass-card-map">
        <!-- Map Placeholder -->
        <div style="border-radius:16px; min-height:220px; display:flex; align-items:center; justify-content:center;">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1597.3444773650192!2d106.790198!3d-6.561367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c416cbdea47b%3A0x9cc185c252b63a14!2sPT%20Bonet%20Utama%20(Internet%20Bogor)!5e1!3m2!1sid!2sid!4v1752934679558!5m2!1sid!2sid" width="370" height="220" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Kontak Info -->
        <div style="display:flex; flex-direction:column; gap:24px;">
          <div style="display:flex; align-items:center; gap:14px;">
            <!-- SVG lokasi -->
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <path fill="#69cae8" d="M12 2C7.03 2 3 6.03 3 11c0 5.25 7.11 10.39 8.09 11.09.34.25.82.25 1.16 0C13.89 21.39 21 16.25 21 11c0-4.97-4.03-9-9-9zm0 17.88C9.14 17.07 5 13.61 5 11c0-3.86 3.14-7 7-7s7 3.14 7 7c0 2.61-4.14 6.07-7 8.88z" />
              <circle cx="12" cy="11" r="3" fill="#69cae8" />
            </svg>
            <span class="glass-card-text-map" style="font-size:1rem;">Komplek Ruko Plaza Indah Bogor B-2 Jl. KH. Sholeh Iskandar - Kedungbadak, Kota Bogor.</span>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <!-- SVG email -->
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <path fill="#69cae8" d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 2v.01L12 13 4 6.01V6h16zm0 12H4V8.99l8 6.99 8-6.99V18z" />
            </svg>
            <span class="glass-card-text-map" style="font-size:1rem;">edukasi4.id@gmail.com</span>
          </div>
          <div style="display:flex; align-items:center; gap:14px;">
            <!-- SVG WhatsApp/Telepon -->
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <path fill="#69cae8" d="M20.52 3.48A11.93 11.93 0 0 0 12 0C5.37 0 0 5.37 0 12c0 2.11.55 4.16 1.6 5.98L0 24l6.18-1.62A11.93 11.93 0 0 0 12 24c6.63 0 12-5.37 12-12 0-3.19-1.24-6.19-3.48-8.52zM12 22c-1.85 0-3.68-.5-5.26-1.45l-.38-.23-3.67.96.98-3.58-.24-.37A9.93 9.93 0 1 1 22 12c0 5.52-4.48 10-10 10zm5.2-7.8c-.28-.14-1.65-.81-1.9-.9-.25-.09-.43-.14-.61.14-.18.28-.7.9-.86 1.08-.16.18-.32.2-.6.07-.28-.14-1.19-.44-2.27-1.41-.84-.75-1.41-1.67-1.58-1.95-.16-.28-.02-.43.12-.57.12-.12.28-.32.42-.48.14-.16.18-.28.28-.46.09-.18.05-.34-.02-.48-.07-.14-.61-1.47-.84-2.01-.22-.53-.45-.46-.61-.47-.16-.01-.34-.01-.52-.01-.18 0-.48.07-.73.34-.25.28-.96.94-.96 2.29 0 1.35.98 2.66 1.12 2.85.14.18 1.93 2.95 4.68 4.02.65.28 1.16.45 1.56.58.65.21 1.24.18 1.7.11.52-.08 1.65-.67 1.88-1.32.23-.65.23-1.2.16-1.32-.07-.12-.25-.2-.53-.34z" />
            </svg>
            <span class="glass-card-text-map" style="font-size:1rem;">0858-8556-4596</span>
          </div>
        </div>
      </div>
    </section>
    @include('footer')
  </main>

  <script>
    let currentHeroIndex = 0;
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDots = document.querySelectorAll('.hero-dot');
    const totalHeroSlides = heroSlides.length;

    function showHeroSlide(index) {
      // Remove active class from all slides and dots
      heroSlides.forEach(slide => slide.classList.remove('active'));
      heroDots.forEach(dot => dot.classList.remove('active'));
      
      // Add active class to current slide and dot
      if (heroSlides[index]) {
        heroSlides[index].classList.add('active');
      }
      if (heroDots[index]) {
        heroDots[index].classList.add('active');
      }
    }

    function nextHeroSlide() {
      if (totalHeroSlides > 1) {
        currentHeroIndex = (currentHeroIndex + 1) % totalHeroSlides;
        showHeroSlide(currentHeroIndex);
      }
    }

    function goToHeroSlide(index) {
      if (index >= 0 && index < totalHeroSlides) {
        currentHeroIndex = index;
        showHeroSlide(currentHeroIndex);
      }
    }

    // Auto-advance hero slideshow every 4 seconds (only if there are multiple images)
    if (totalHeroSlides > 1) {
      setInterval(nextHeroSlide, 4000);
    }


    // Ruang Lingkup Carousel
    let currentIndex = 0;
    const totalCards = 8;
    const cards = document.querySelectorAll('.card');
    const dotsContainer = document.getElementById('dotsContainer');
    const kolaborasiHandlers = {};

    // Generate dots
    for (let i = 0; i < totalCards; i++) {
      const dot = document.createElement('div');
      dot.className = 'dot';
      if (i === 0) dot.classList.add('active');
      dot.onclick = () => goToCard(i);
      dotsContainer.appendChild(dot);
    }

    const dots = document.querySelectorAll('.dot');

    function updateCarousel() {
      cards.forEach((card, index) => {
        card.classList.remove('active', 'prev', 'next', 'far-left', 'far-right', 'hidden');
        const diff = index - currentIndex;
        if (diff === 0) {
          card.classList.add('active');
        } else if (diff === -1 || (diff === totalCards - 1 && currentIndex === 0)) {
          card.classList.add('prev');
        } else if (diff === 1 || (diff === -(totalCards - 1) && currentIndex === totalCards - 1)) {
          card.classList.add('next');
        } else if (diff === -2 || (diff === totalCards - 2 && currentIndex <= 1)) {
          card.classList.add('far-left');
        } else if (diff === 2 || (diff === -(totalCards - 2) && currentIndex >= totalCards - 2)) {
          card.classList.add('far-right');
        } else {
          card.classList.add('hidden');
        }
      });
      // Update dots
      dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentIndex);
      });
    }

    function nextCard() {
      currentIndex = (currentIndex + 1) % totalCards;
      updateCarousel();
    }

    function prevCard() {
      currentIndex = (currentIndex - 1 + totalCards) % totalCards;
      updateCarousel();
    }

    function goToCard(index) {
      currentIndex = index;
      updateCarousel();
    }

    // Kolaborasi Perusahaan Logo Carousel
    function setupKolaborasiLogoCarousel(id) {
  const carousel = document.getElementById(id + '-carousel');
  const originalSlides = carousel.querySelectorAll('.kolaborasi-slide');
  const indicatorsContainer = document.getElementById(id + '-indicators');
  
  if (originalSlides.length === 0) return;
  
  const totalSlides = originalSlides.length;
  let current = 0;
  
  // Clone semua slides untuk infinite loop
  originalSlides.forEach(slide => {
    const clone = slide.cloneNode(true);
    carousel.appendChild(clone);
  });
  
  // Update slides list setelah cloning
  const allSlides = carousel.querySelectorAll('.kolaborasi-slide');
  const slideWidth = originalSlides[0].offsetWidth + 32;
  
  // Buat indikator berdasarkan original slides
  indicatorsContainer.innerHTML = '';
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement('div');
    dot.className = 'indicator' + (i === 0 ? ' active' : '');
    dot.onclick = () => goTo(i);
    indicatorsContainer.appendChild(dot);
  }
  const indicators = indicatorsContainer.querySelectorAll('.indicator');

  function update() {
    carousel.style.transform = `translateX(-${current * slideWidth}px)`;
    
    // Update indicator yang aktif
    const indicatorIndex = current % totalSlides;
    indicators.forEach((dot, i) => dot.classList.toggle('active', i === indicatorIndex));
  }

  function move(direction) {
    current += direction;
    carousel.style.transition = 'transform 0.5s cubic-bezier(.77, 0, .18, 1)';
    update();
    
    // Reset ke awal kalau sudah melewati clone
    if (current >= totalSlides) {
      setTimeout(() => {
        current = 0;
        carousel.style.transition = 'none';
        update();
        setTimeout(() => {
          carousel.style.transition = 'transform 0.5s cubic-bezier(.77, 0, .18, 1)';
        }, 50);
      }, 500);
    }
    
    // Handle mundur (kalau mau support prev juga)
    if (current < 0) {
      setTimeout(() => {
        current = totalSlides - 1;
        carousel.style.transition = 'none';
        update();
        setTimeout(() => {
          carousel.style.transition = 'transform 0.5s cubic-bezier(.77, 0, .18, 1)';
        }, 50);
      }, 500);
    }
  }

  function goTo(index) {
    current = index;
    carousel.style.transition = 'transform 0.5s cubic-bezier(.77, 0, .18, 1)';
    update();
  }

  // Initialize
  update();
  
  // Store handler untuk global access
  kolaborasiHandlers[id] = move;
  
  // Auto-advance tiap 4 detik
  setInterval(() => move(1), 4000);
}

    // Handler global agar arrow bisa akses carousel manapun
    window.moveKolaborasiSlide = function(n, t) {
      if (kolaborasiHandlers[t]) kolaborasiHandlers[t](n);
    };

    // Inisialisasi
    setupKolaborasiLogoCarousel('perusahaan');
    setupKolaborasiLogoCarousel('akademisi');

    // Auto-rotate for main carousel
    setInterval(nextCard, 5000);

    // Click on cards to navigate
    cards.forEach((card, index) => {
      card.addEventListener('click', () => {
        if (card.classList.contains('next')) {
          nextCard();
        } else if (card.classList.contains('prev')) {
          prevCard();
        } else if (!card.classList.contains('active')) {
          goToCard(index);
        }
      });
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') prevCard();
      if (e.key === 'ArrowRight') nextCard();
    });

    // Touch/swipe support
    let startX = 0;
    let endX = 0;
    const carouselContainer = document.querySelector('.carousel-container');

    carouselContainer.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
    });

    carouselContainer.addEventListener('touchmove', (e) => {
      endX = e.touches[0].clientX;
    });

    carouselContainer.addEventListener('touchend', () => {
      if (startX - endX > 50) {
        nextCard();
      } else if (endX - startX > 50) {
        prevCard();
      }
    });
  </script>
</body>
</html>
