let isFollowing = false;

function toggleFollow() {
    isFollowing = !isFollowing;

    const followButton = document.querySelector('.follow-button');
    followButton.textContent = isFollowing ? 'Unfollow' : 'Follow';
}
