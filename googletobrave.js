// ==UserScript==
// @name         Intercept Google to Brave Search
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Redirects Google search queries to Brave search
// @author       You
// @match        *://www.google.com/*
// @grant        none
// @run-at       document-end
// ==/UserScript==

(function() {
    'use strict';

    function interceptSearch(e) {
        // Prevent Google from doing its thing
        e.preventDefault();

        // Get the search query
        let query = document.querySelector('input[name="q"]').value;

        // Construct the Brave search URL
        let braveSearchUrl = `https://search.brave.com/search?q=${query}`;

        // Redirect to Brave search
        window.location.href = braveSearchUrl;
    }

    // Wait for the search form to be available
    let checkExist = setInterval(function() {
        let form = document.querySelector('form[name="f"]');
        if (form !== null) {
            form.addEventListener('submit', interceptSearch);
            clearInterval(checkExist);
        }
    }, 100); // check every 100ms
})();
