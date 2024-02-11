let isLiked = false;
let likesCount = 0;

function toggleLike() {
    isLiked = !isLiked;
    likesCount += isLiked ? 1 : -1;

    const likeButton = document.querySelector('.like-button');
    const likesCountElement = document.querySelector('.likes-count');

    likeButton.textContent = isLiked ? 'Unlike' : 'Like';
    likesCountElement.textContent = `${likesCount} ${likesCount === 1 ? 'like' : 'likes'}`;
}


// let isLiked1 = false;
// let likesCount1 = 0;

// function toggleLike() {
//     isLiked1 = !isLiked;
//     likesCount1 += isLiked ? 1 : -1;

//     const likeButton = document.querySelector('.like-button1');
//     const likesCountElement = document.querySelector('.likes-count1');

//     likeButton.textContent = isLiked ? 'Unlike' : 'Like';
//     likesCountElement.textContent = `${likesCount} ${likesCount === 1 ? 'like' : 'likes'}`;
// }

// let isLiked2 = false;
// let likesCount2 = 0;

// function toggleLike() {
//     isLiked2 = !isLiked;
//     likesCount2 += isLiked ? 1 : -1;

//     const likeButton = document.querySelector('.like-button2');
//     const likesCountElement = document.querySelector('.likes-count2');

//     likeButton.textContent = isLiked ? 'Unlike' : 'Like';
//     likesCountElement.textContent = `${likesCount} ${likesCount === 1 ? 'like' : 'likes'}`;
// }


// let isLiked3 = false;
// let likesCount3 = 0;

// function toggleLike() {
//     isLiked3 = !isLiked;
//     likesCount3 += isLiked ? 1 : -1;

//     const likeButton = document.querySelector('.like-button3');
//     const likesCountElement = document.querySelector('.likes-count3');

//     likeButton.textContent = isLiked ? 'Unlike' : 'Like';
//     likesCountElement.textContent = `${likesCount} ${likesCount === 1 ? 'like' : 'likes'}`;
// }


// let isLiked4 = false;
// let likesCount4 = 0;

// function toggleLike() {
//     isLiked4 = !isLiked;
//     likesCount4 += isLiked ? 1 : -1;

//     const likeButton = document.querySelector('.like-button4');
//     const likesCountElement = document.querySelector('.likes-count4');

//     likeButton.textContent = isLiked ? 'Unlike' : 'Like';
//     likesCountElement.textContent = `${likesCount} ${likesCount === 1 ? 'like' : 'likes'}`;
// }
