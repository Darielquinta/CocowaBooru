// ==UserScript==
// @name         Redirect Google to Brave Search
// @namespace    http://tampermonkey.net/
// @version      0.1
// @description  Redirects Google search queries to Brave search
// @author       You
// @match        *://www.google.com/search?*
// @grant        none
// @run-at       document-start
// ==/UserScript==

(function() {
    'use strict';

    // Get the search query from the URL
    let params = new URLSearchParams(window.location.search);
    let query = params.get("q");

    // Construct the Brave search URL
    let braveSearchUrl = `https://search.brave.com/search?q=${query}`;

    // Redirect to Brave search
    window.location.href = braveSearchUrl;
})();
