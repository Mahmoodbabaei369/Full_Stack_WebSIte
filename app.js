document.getElementById('postForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const title = document.getElementById('title').value;
    const content = document.getElementById('content').value;

    fetch('create_post.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `title=${encodeURIComponent(title)}&content=${encodeURIComponent(content)}`,
    })
    .then(response => response.text())
    .then(data => {
        alert(data);
        document.getElementById('title').value = '';
        document.getElementById('content').value = '';
        displayPosts();
    });
});

function displayPosts() {
    fetch('posts/posts.json')
        .then(response => response.json())
        .then(posts => {
            const postsContainer = document.getElementById('posts');
            postsContainer.innerHTML = '<h2>پست‌ها</h2>';
            posts.forEach(post => {
                const postElement = document.createElement('div');
                postElement.className = 'post';
                postElement.innerHTML = `<h3>${post.title}</h3><p>${post.content}</p>`;
                postsContainer.appendChild(postElement);
            });
        });
}

window.onload = function() {
    displayPosts();
};
