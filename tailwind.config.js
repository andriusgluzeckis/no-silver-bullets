const autoHeight = fontSize => {
  return `${(fontSize  * 120) / 100}rem`;
}
module.exports = {
  content: [
    './src/**',
    './flex-content/blocks/**',
    './partials/**',
    './footer.php',
    './header.php',
  ],
  safelist: [
    {
      // generates all default padding top classes with md breakpoint classes for same property
      pattern: /(bg|text)-./,
      variants: ['md'],
    },
  ],
  theme: {
    fontSize: {
        '10': ['0.625rem', autoHeight(0.625)],
        '12': ['0.75rem', autoHeight(0.75)],
        '14': ['0.875rem', autoHeight(0.875)],
        '15': ['0.938rem', autoHeight(0.938)],
        '16': ['1rem', autoHeight(1)],
        '17': ['1.063rem', autoHeight(1.063)],
        '18': ['1.125rem', autoHeight(1.125)],
        '20': ['1.25rem', autoHeight(1.25)],
        '22': ['1.375rem', autoHeight(1.375)],
        '24': ['1.5rem', autoHeight(1.5)],
        '26': ['1.625rem', autoHeight(1.625)],
        '28': ['1.75rem', autoHeight(1.75)],
        '30': ['1.875rem', autoHeight(1.875)],
        '32': ['2rem', autoHeight(2)],
        '34': ['2.125rem', autoHeight(2.125)],
        '36': ['2.25rem', autoHeight(2.25)],
        '40': ['2.5rem', autoHeight(2.5)],
        '45': ['2.813rem', autoHeight(2.813)],
        '48': ['3rem', autoHeight(3)],
        '60': ['3.75rem', autoHeight(3.75)],
        '68': ['4.25rem', autoHeight(4.25)],
        '80': ['5rem', autoHeight(5)],
    },
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '900px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
    },
    fontFamily: {
      'geo' : 'Geologica',
      'bur' : 'Bureau Grot UltraBlack'
    },
      extend: {
        container: {
          screens: {
              'DEFAULT': '1800px',
          },
          center: true,
          padding: {
              DEFAULT: '20px',
          },
        },
        screens: {
          'footer': '1400px',
          // => @media (min-width: 1400px) { ... }
        },
        colors: {
            'primary-color': {
              'DEFAULT': '#6ad2c8',
            },
            'secondary-color': {
              'DEFAULT': '#e52825',
            },
            'tangerine': {
              'DEFAULT': '#ffa501'
            },
            'maroon': {
              'DEFAULT': '#c62e82'
            },
            'royal-blue': {
              'DEFAULT': '#1c3feb'
            },
            'yellow': {
              'DEFAULT': '#d8e022'
            },
            'pink': {
              'DEFAULT': '#ffC0cb'
            }
            
        },
        content: {
            'arrow-down': 'url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMCAxMSI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLWxpbmVjYXA9InNxdWFyZSIgc3Ryb2tlLXdpZHRoPSIuOCI+PHBhdGggZD0ibTEuMzk2IDEuNDA5IDguNzA4IDguMTgyTTE4LjYwNCAxLjQwOSA5Ljg5NiA5LjU5MSIvPjwvZz48L3N2Zz4=")',
        }
      },
    },
  variants: {
    // The 'active' variant will be generated in addition to the defaults
    extend: {
      border: ['last']
    }
  },
}