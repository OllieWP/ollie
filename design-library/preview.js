/**
 * Design preview bootstrap. Loads tokens.css into a Tailwind v4 browser-build
 * style block, then loads Tailwind. Designs include just this one script.
 */
(function () {
  var here = document.currentScript.src;
  fetch(new URL('./tokens.css', here))
    .then(function (r) { return r.text(); })
    .then(function (css) {
      var style = document.createElement('style');
      style.setAttribute('type', 'text/tailwindcss');
      style.textContent = css;
      document.head.appendChild(style);
      var s = document.createElement('script');
      s.src = 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4';
      document.head.appendChild(s);
    });
})();
