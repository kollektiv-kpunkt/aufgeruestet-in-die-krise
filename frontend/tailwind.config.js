module.exports = {
  content: require("fast-glob").sync(["./**/*.html", "*.html"]),
  safelist: ["opacity-100", "bg-black", "bg-white"],
  theme: {
    extend: {
      colors: {
        background: "#000000",
        accent: "#28eb64"
      },
    },
  },
  plugins: [],
};