/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {
      colors: {
        lbGreen: {
          DEFAULT: "#2EB031",
          Light: "#A1FFA4",
          Dark: "#207B23",
        },
        lbBlue: {
          DEFAULT: "#2E4986",
          Dark: "#20425E",
          Light: "#ABD9FF",
          Lightest: "#E1F2FF",
          Alert: "#1D4ED8",
        },
        lbWhite: {
          DEFAULT: "#FFFFFF",
          Silver: "#F5F5F7",
        },
        lgBlack: {
          DEFAULT: "#000000",
          Inpure: "#040301",
        },
        lbYEllow: {
          DEFAULT: "#DAA520",
          Alert: "#FDDA67",
        },
        lgRed: {
          Alert: '#DC2626'
        }
      },
      fontFamily: {
        rqInter: ["Inter", "sans-serif"],
        rqNunito: ["Nunito", "sans-serif"],
      },
    },
  },
  plugins: [],
};

