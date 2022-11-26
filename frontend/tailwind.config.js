module.exports = {
  content: require("fast-glob").sync(["./**/*.html", "*.html"]),
  safelist: ["opacity-100", "bg-black"],
  theme: {
    extend: {
      colors: {
        background: "#000000",
        accent: "#28EB64"
      },
    },
  },
  plugins: [],
};