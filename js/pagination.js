// Constants
const articlesPerPage = 5; // Maximum number of articles per page

// Initial data
let articles = []; // Array to store articles

// Add articles to the system
function addArticle(title) {
  articles.push({ title });
  updatePagination();
}

// Update pagination
function updatePagination() {
  const totalArticles = articles.length; // Total number of articles
  let totalPages = Math.ceil(totalArticles / articlesPerPage); // Total number of pages

  const currentPage = getCurrentPage(); // Get the current page
  const startIndex = (currentPage - 1) * articlesPerPage;
  const endIndex = currentPage * articlesPerPage;
  const articlesToDisplay = articles.slice(startIndex, endIndex);

  renderPagination(articlesToDisplay, totalPages, currentPage);
  renderArticles(articlesToDisplay);
}

// Get the current page
function getCurrentPage() {
  // Logic to determine the current page
  // ...
}

// Render pagination UI
function renderPagination(articlesToDisplay, totalPages, currentPage) {
  // Example rendering logic
  console.clear();
  console.log(`Current Page: ${currentPage}`);
  console.log(`Total Pages: ${totalPages}`);
  console.log(`Total Articles: ${articles.length}`);

  // Update pagination controls in the HTML if needed
  // ...
}

// Render articles in the <article> container
function renderArticles(articlesToDisplay) {
  const articleContainer = document.getElementById('article-container');

  // Clear existing articles
  articleContainer.innerHTML = '';

  // Create and append new article elements
  articlesToDisplay.forEach((article, index) => {
    const articleElement = document.createElement('article');
    articleElement.textContent = `${index + 1}. ${article.title}`;
    articleContainer.appendChild(articleElement);
  });
}

// Usage example
addArticle("Article 1");
addArticle("Article 2");
addArticle("Article 3");
addArticle("Article 4");
addArticle("Article 5");
addArticle("Article 6");
addArticle("Article 7");