document.addEventListener("DOMContentLoaded", function() {
    const bookDisplay = document.getElementById("bookDisplay");
    const searchInput = document.getElementById("searchInput");

    // Function to create and append book card
    function createBookCard(book) {
        const card = document.createElement("div");
        card.classList.add("book-card");

        const image = document.createElement("img");
        image.src = book.volumeInfo.imageLinks ? book.volumeInfo.imageLinks.thumbnail : 'placeholder.jpg';
        image.alt = book.volumeInfo.title;

        // Open book details when card is clicked
        card.addEventListener("click", function() {
            window.open(book.volumeInfo.previewLink, "_blank");
        });

        card.appendChild(image);

        const title = document.createElement("h2");
        title.textContent = book.volumeInfo.title;
        card.appendChild(title);

        const authors = document.createElement("p");
        authors.textContent = book.volumeInfo.authors ? book.volumeInfo.authors.join(", ") : "Unknown Author";
        card.appendChild(authors);

        bookDisplay.appendChild(card);
    }

    // Function to fetch default books
    async function fetchDefaultBooks() {
        try {
            const defaultBooks = ["Le malentendu", "Candide, Ou L'Optimisme", "Le Petit Prince", "Les Misérables", "Le Dernier Jour d'un condamné"];
            for (const title of defaultBooks) {
                const response = await fetch(`https://www.googleapis.com/books/v1/volumes?q=${title}&maxResults=1`);
                const data = await response.json();
                const book = data.items[0];
                createBookCard(book);
            }
        } catch (error) {
            console.error('Error fetching default books:', error);
        }
    }

    // Function to fetch books from the Google Books API based on search query
    async function searchBooks(query) {
        try {
            const response = await fetch(`https://www.googleapis.com/books/v1/volumes?q=${query}&maxResults=4`);
            const data = await response.json();
            const books = data.items || [];

            // Clear previous search results
            bookDisplay.innerHTML = '';

            // Loop through the books array and create book cards
            books.forEach(createBookCard);
        } catch (error) {
            console.error('Error fetching books:', error);
        }
    }

    // Event listener for input in search field
    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm !== "") {
            searchBooks(searchTerm);
        } else {
            // If the search input is empty, fetch default books
            fetchDefaultBooks();
        }
    });

    // Fetch default books when the page loads
    fetchDefaultBooks();
});
document.addEventListener("DOMContentLoaded", function() {
    const showSearchButton = document.getElementById("showSearchButton");
    const searchContainer = document.getElementById("searchContainer");
    const searchInput = document.getElementById("searchInput");

    // Function to show the search input container
    function showSearchInput() {
        searchContainer.style.display = "block";
        showSearchButton.style.display = "none";
    }

    // Function to hide the search input container
    function hideSearchInput() {
        searchContainer.style.display = "none";
        showSearchButton.style.display = "block";
    }

    // Event listener for the show search button
    showSearchButton.addEventListener("click", function() {
        showSearchInput();
    });

    // Event listener for the search button
    searchInput.addEventListener("input", function() {
        const searchTerm = searchInput.value.trim();
        if (searchTerm !== "") {
            // Perform search operation here
            console.log("Searching for:", searchTerm);
        }
    });
});
