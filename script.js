// Video trailer sources
const trailers = {
    'redeeming-love': 'trailers/REDEEMING-LOVE.mp4',
    'mona-lisa-smile': 'trailers/MONA-LISA-SMILE.mp4',
    'six-triple-eight': 'trailers/Six-Triple-Eight.mp4',
    'four-sisters-and-a-wedding': 'trailers/FOUR-SISTERS.mp4',
    'when-marnie-was-there': 'trailers/Marnie.mp4',
    'godzilla-x-kong-new-empire': 'trailers/Godzilla-x-Kong-New-Empire.mp4',
    'jumanji-welcome-to-the-jungle': 'trailers/Jumanji-Welcome-to-the-Jungle.mp4',
    'bad-boys-for-life': 'trailers/Bad-Boys-for-Life.mp4',
    'transformers-one': 'trailers/Transformers-One.mp4',
    'the-hangover': 'trailers/The-Hangover.mp4'
};

// Open trailer modal
function openTrailer(movieId) {
    const modal = document.getElementById('videoModal');
    const video = document.getElementById('trailerVideo');
    const videoSource = document.getElementById('videoSource');
    
    // Set the video source
    videoSource.src = trailers[movieId];
    
    // Load and play the video
    video.load();
    
    // Show the modal
    modal.classList.add('active');
    
    // Play the video
    video.play();
    
    // Auto-pause after 1 minute (60 seconds)
    setTimeout(() => {
        if (!video.paused) {
            video.pause();
        }
    }, 60000);
    
    // Optional: Auto-close modal after video ends or after 1 minute
    video.addEventListener('ended', () => {
        closeTrailer();
    });
}

// Close trailer modal
function closeTrailer() {
    const modal = document.getElementById('videoModal');
    const video = document.getElementById('trailerVideo');
    
    // Pause and reset the video
    video.pause();
    video.currentTime = 0;
    
    // Hide the modal
    modal.classList.remove('active');
}

// Close modal when clicking outside the video
window.onclick = function(event) {
    const modal = document.getElementById('videoModal');
    if (event.target === modal) {
        closeTrailer();
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeTrailer();
    }
});

// Add to List functionality
function addToList(movieTitle, button) {
    // Get existing list from localStorage or create new array
    let myList = JSON.parse(localStorage.getItem('myMovieList')) || [];
    
    // Check if movie is already in the list
    const movieIndex = myList.indexOf(movieTitle);
    
    if (movieIndex === -1) {
        // Add movie to list
        myList.push(movieTitle);
        button.classList.add('added');
        button.textContent = '✓';
        alert(movieTitle + ' has been added to your list!');
    } else {
        // Remove movie from list
        myList.splice(movieIndex, 1);
        button.classList.remove('added');
        button.textContent = '+';
        alert(movieTitle + ' has been removed from your list!');
    }
    
    // Save updated list to localStorage
    localStorage.setItem('myMovieList', JSON.stringify(myList));
}

// Check if movies are already in the list on page load
window.addEventListener('DOMContentLoaded', function() {
    let myList = JSON.parse(localStorage.getItem('myMovieList')) || [];
    
    // Update buttons for movies already in the list
    const buttons = document.querySelectorAll('.add-to-list-btn');
    buttons.forEach(button => {
        const movieCard = button.closest('.movie-card');
        const movieTitle = movieCard.querySelector('h2').textContent;
        
        if (myList.includes(movieTitle)) {
            button.classList.add('added');
            button.textContent = '✓';
        }


                // Dark / Light Mode Toggle
        // 🌙☀️ Dark / Light Mode Toggle with Icon
        const modeToggle = document.getElementById('modeToggle');
        const body = document.body;

        // Load saved theme
        const savedTheme = localStorage.getItem('theme');

        if (savedTheme === 'dark') {
            body.classList.add('dark-mode');
            modeToggle.textContent = '☀️';
        } else {
            modeToggle.textContent = '🌙';
        }

        // Toggle theme
        modeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');

            if (body.classList.contains('dark-mode')) {
                modeToggle.textContent = '☀️';
                localStorage.setItem('theme', 'dark');
            } else {
                modeToggle.textContent = '🌙';
                localStorage.setItem('theme', 'light');
            }
        });

    });
});
