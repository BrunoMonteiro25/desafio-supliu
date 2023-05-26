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
    var albumTitle = album
      .getElementsByClassName('album-title')[0]
      .textContent.toLowerCase()

    if (albumTitle.includes(searchTerm)) {
      album.style.display = 'block'
      hasResults = true
    } else {
      album.style.display = 'none'
    }
  }

  if (hasResults) {
    searchResults.textContent = ''
  } else {
    searchResults.textContent = noResultsMessage
  }

  if (searchTerm === '') {
    novoAlbumButton.style.display = 'block'
  } else {
    novoAlbumButton.style.display = 'none'
  }
}

function handleSearch(event) {
  if (event.key === 'Enter') {
    searchAlbums()
  }
}

document.getElementById('search-btn').addEventListener('click', searchAlbums)
document
  .getElementById('search-input')
  .addEventListener('keydown', handleSearch)
