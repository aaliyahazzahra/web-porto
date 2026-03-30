/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        fadeUp: {
          '0%': { opacity: '0', transform: 'translateY(30px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        scaleIn: {
          '0%': { opacity: '0', transform: 'scale(0.9)' },
          '100%': { opacity: '1', transform: 'scale(1)' },
        }
      },
      animation: {
        'fade-up': 'fadeUp 0.8s ease-out forwards',
        'scale-in': 'scaleIn 0.8s ease-out forwards',
        // If animate-hero-1 and animate-hero-2 are also custom, define them here:
        'hero-1': 'fadeUp 0.8s ease-out 0.2s forwards', 
        'hero-2': 'fadeUp 0.8s ease-out 0.4s forwards',
      }
    },
  },
  plugins: [],
}