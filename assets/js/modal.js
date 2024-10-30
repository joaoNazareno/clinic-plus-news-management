function editNews(noticia) {
    document.getElementById('editNewsId').value = noticia.id;
    document.getElementById('editNewsTitle').value = noticia.titulo;
    document.getElementById('editNewsContent').value = noticia.conteudo;
    const dataPublicacao = noticia.data_publicacao.split(' ')[0];
    document.getElementById('editNewsDate').value = dataPublicacao;
    const currentImageElement = document.getElementById('currentImage');
    currentImageElement.src = './assets/img/blog/' + noticia.imagem; 
    currentImageElement.style.display = 'block'; 
}