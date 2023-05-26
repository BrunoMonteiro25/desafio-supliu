function searchAlbums() {
  var searchTerm = document.getElementById('search-input').value.toLowerCase()
  var albums = document.getElementsByClassName('album')
  var searchResults = document.getElementById('search-results')
  var novoAlbumButton = document.getElementById('novo-album')

  var noResultsMessage =
    'Não foi encontrado nenhum resultado para: ' + searchTerm
  var hasResults = false

  for (var i = 0; i < albums.length; i++) {
    var album = albums[i]
    var albumTitleElement = album.querySelector('.album-title')

    if (albumTitleElement) {
      var albumTitle = albumTitleElement.textContent.toLowerCase()

      if (albumTitle.includes(searchTerm)) {
        album.style.display = 'block'
        hasResults = true
      } else {
        album.style.display = 'none'
      }
    }
  }

  if (searchResults) {
    if (hasResults) {
      searchResults.textContent = ''
    } else {
      searchResults.textContent = noResultsMessage
    }
  }

  if (novoAlbumButton) {
    if (searchTerm === '') {
      novoAlbumButton.style.display = 'block'
    } else {
      novoAlbumButton.style.display = 'none'
    }
  }
}

function handleSearch(event) {
  if (event.key === 'Enter') {
    searchAlbums()
  }
}

var searchButton = document.getElementById('search-btn')
if (searchButton) {
  searchButton.addEventListener('click', searchAlbums)
}

var searchInput = document.getElementById('search-input')
if (searchInput) {
  searchInput.addEventListener('keydown', handleSearch)
}
