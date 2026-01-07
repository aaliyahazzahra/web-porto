export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        heroFadeUp: {
          '0%': {
            opacity: '0',
            transform: 'translateY(24px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)',
          },
        },
      },
      animation: {
        'hero-1': 'heroFadeUp 0.9s ease-out forwards',
        'hero-2': 'heroFadeUp 0.9s ease-out 0.2s forwards',
      },
    },
  },
  plugins: [],
}
