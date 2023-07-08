const articlesPerPage = 6; // Maximum number of articles per page
const masonryContainer = document.querySelector('.bricks-wrapper');
const articles = [...document.querySelectorAll('.brick')]; // Array of <article> elements

let currentPage = 1;
let masonry; // Masonry instance

function updatePagination() {
  const startIndex = (currentPage - 1) * articlesPerPage;
  const endIndex = currentPage * articlesPerPage;
  const visibleArticles = articles.slice(startIndex, endIndex);

  // Hide all articles
  articles.forEach((article) => {
    article.style.display = 'none';
  });

  // Show visible articles
  visibleArticles.forEach((article) => {
    article.style.display = 'block';
  });

  // Update pagination UI (e.g., active page indicator, disable/enable buttons)
  const pageNumberElement = document.getElementById('page-number');
  pageNumberElement.textContent = currentPage.toString();

  // Initialize or reload the Masonry layout
  if (masonry) {
    masonry.reloadItems();
    masonry.layout();
  } else {
    masonry = new Masonry(masonryContainer, {
      itemSelector: '.brick',
      columnWidth: '.grid-sizer',
      percentPosition: true,
      transitionDuration: 0,
    });
  }
}

function nextPage() {
  const totalPages = getTotalPages();
  if (currentPage < totalPages) {
    currentPage++;
    updatePagination();
    onPageChange(currentPage); // Call the callback function on page change
  }
}

function previousPage() {
  if (currentPage > 1) {
    currentPage--;
    updatePagination();
    onPageChange(currentPage); // Call the callback function on page change
  }
}

function getTotalPages() {
  return Math.ceil(articles.length / articlesPerPage);
}

// Callback function for page change
function onPageChange(page) {
  // Access the newly created page here
  console.log(`Accessing page ${page}`);
}

// Event listener for "Next Page" button click
const nextPageButton = document.getElementById('next-page-button');
nextPageButton.addEventListener('click', () => {
  nextPage();
});

// Event listener for "Previous Page" button click
const previousPageButton = document.getElementById('previous-page-button');
previousPageButton.addEventListener('click', () => {
  previousPage();
});

// Usage example
updatePagination();