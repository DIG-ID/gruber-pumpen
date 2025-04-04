/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './front-page.php',
    './header.php',
    './index.php',
    './footer.php',
    './404.php',
    './inc/*.php',
    './post-templates/**/*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
  ],
  theme: {
    fontFamily: {
      outfit: [ 'Outfit', 'sans-serif'],
      dm: ['DM Sans', 'sans-serif']
    },
    extend: {
      letterSpacing: {
        //wide: '.038em',
        //wider: '.06em',
      },
      colors: {
        'blue-shade-0': '#F0F7FA',
        'blue-shade-1': '#F5F7FA',
        'blue-shade-2': '#688494',
        'blue-shade-3': '#0D6394',
        'blue-shade-4': '#063047',
        'blue-shade-5': '#010F34',
        'blue-shade-6': '#1F2432',
        'orange-shade-1': "#D3594A",
        'orange-shade-2': "#C54030",
        'orange-shade-3': "#942719",
        'red': '#B63939',
        'green': '#95BE49',
        'orange': '#D7903B',
      },
      transitionTimingFunction: {
        //'out-expo': 'cubic-bezier(0.16, 1, 0.3, 1)',
      },
      gridTemplateRows: {
        // Allow grid rows to auto size based on content
        'masonry': 'masonry',
      },
    },
  },
  plugins: [
    function ({ addUtilities }) {
      addUtilities({
        '.clip-small': {
          'clip-path': 'polygon(0 0, 85% 0, 82% 100%, 0% 100%)',
        },
        '.clip-medium': {
          'clip-path': 'polygon(0 0, 55% 0, 52% 100%, 0% 100%)',
        },
        '.clip-large': {
          'clip-path': 'polygon(0 0, 45% 0, 42% 100%, 0% 100%)',
        },
      });
    },
  ],
}
