/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      colors: {
        // Dark Mode UI
        background: '#0f0f0f',
        surface: '#1e1e1e',
        surfaceAlt: '#121212',
        textMain: '#f5f5f5',
        textSoft: '#e0e0e0',

        // Accent Colors
        primary: '#3b82f6',
        accentBlue: '#00dfd8',
        accentPurple: '#6366f1',
        accentTeal: '#14b8a6',
        accentCyan: '#06b6d4',

        // Gradient Endpoints
        gradientBlue: '#3b82f6',
        gradientPurple: '#9333ea',
        gradientPink: '#ec4899',
        gradientRed: '#ef4444',

        // Neon Highlights
        neonBlue: '#00f6ff',
        neonGreen: '#00ffab',
        neonViolet: '#a78bfa',

        // Border & Muted
        borderLine: '#374151',
        glassWhite: 'rgba(255, 255, 255, 0.1)',
      },
      backgroundImage: {
        'gradient-blue-purple': 'linear-gradient(to right, #3b82f6, #9333ea)',
        'gradient-teal-cyan': 'linear-gradient(to right, #14b8a6, #06b6d4)',
        'gradient-pink-red': 'linear-gradient(to right, #ec4899, #ef4444)',
      },
      backdropBlur: {
        xs: '2px',        sm: '4px',
        DEFAULT: '10px',
        md: '12px',
        lg: '16px',
        xl: '24px',
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      borderRadius: {
        xl: '1rem',
        '2xl': '1.5rem',
      },
    },
  },
  plugins: [],
};
