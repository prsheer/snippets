// Listen for form submit.
document.getElementById('myForm').addEventListener('submit', saveBookmark);

function saveBookmark(e) {
    // Get form value
    var siteName = document.getElementById('siteName').value;
    var siteUrl = document.getElementById('siteUrl').value;

    // Storing name and url into object.
    var bookmark = {
        name: siteName,
        url: siteUrl
    };

    // Test if bookmarks is null.
    if (localStorage.getItem('bookmarks') === null) {
        // Initialize array.
        var bookmarks = [];
        // Add to array.
        bookmark.push(bookmark);
        // Set to localStorage.
        localStorage.setItem('bookmarks', JSON.stringify(bookmarks));
    } else {
        // Get bookmarks from localstorage.
        var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
        // Add bookmark to array.
        bookmark.push(bookmark);
        // Re-set back to localstorage.
        localStorage.setItem('bookmarks', JSON.stringify(bookmarks));

    }

    // Prevent form from submitting.
    e.preventDefault();
}

function fetchBookmarks() {
    // Get bookmarks from localstorage.
    var bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

    // Get output id.
    var bookmarksResults = document.getElementById('bookmarksResults');

    // Build output.
    bookmarksResults.innerHTML = '';

    for (var i = 0; i <= bookmarks.length; i++) {
        var name = bookmarks[i].name;
        var url = bookmarks[i].url;

        bookmarksResults.innerHTML += '<div class="well"> You bookmarked ' + name + ' site, with the ' + url + ' url.'
    }



}