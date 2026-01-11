<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movie Vault</title>
    <link rel="icon" type="image/png" href="/Logo.png">
</head>
<body>
    <header>

        <h1>Movie Vault</h1>
        <img src="Logo.png" alt="Movie Vault Logo" class="logo ">
        
        <nav>
            <ul>
              <li>
                <button class="toggle-btn icon-toggle" id="modeToggle" aria-label="Toggle dark mode">
                🌙
                </button>

            </li>  
                
                <li><a href="movie.php">Movies</a></li>
                <li><a href="mylist.html">My list</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 class="page-title">Featured Movies</h2>
        
        <div class="movies-container">
            <!-- Movie 1: Redeeming Love -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('redeeming-love')">
                    <img src="filmpics/RedeemingLove.jpg" alt="Redeeming Love Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Redeeming Love</h2>
                    <p><strong>Director:</strong> D.J. Caruso</p>
                    <p><strong>Genre:</strong> Romance, Drama</p>
                    <p><strong>Synopsis:</strong> A powerful retelling of the book of Hosea set in 1850s California Gold Rush, following a young woman sold into prostitution and the farmer who falls in love with her.</p>
                    <p><strong>Cast:</strong> Abigail Cowen, Tom Lewis, Famke Janssen</p>
                    <p><strong>Rating:</strong> PG-13</p>
                    <div class="action-buttons">
                    <button class="add-to-list-btn" onclick="addToList('Redeeming Love', this)" title="Add to My List">
                        <span class="btn-icon">+</span>
                        <span class="btn-text">Add to List</span>
                    </button>
                    <button class="watch-later-btn" onclick="addToWatchLater('Redeeming Love', this)" title="Watch Later">
                        <span class="btn-icon">🕒</span>
                        <span class="btn-text">Watch Later</span>
                    </button>
                </div>
                </div>
            </section>

            <!-- Movie 2: Mona Lisa Smile -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('mona-lisa-smile')">
                    <img src="filmpics/MonaLisaSmile.jpg" alt="Mona Lisa Smile Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Mona Lisa Smile</h2>
                    <p><strong>Director:</strong> Mike Newell</p>
                    <p><strong>Genre:</strong> Drama, Romance</p>
                    <p><strong>Synopsis:</strong> A free-thinking art professor teaches conservative 1950s Wellesley girls to question their traditional social roles.</p>
                    <p><strong>Cast:</strong> Julia Roberts, Kirsten Dunst, Julia Stiles, Maggie Gyllenhaal</p>
                    <p><strong>Rating:</strong> PG-13</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('Mona Lisa Smile', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('Mona Lisa Smile', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

            <!-- Movie 3: Six Triple Eight -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('six-triple-eight')">
                    <img src="filmpics/sixtripleeight.jpg" alt="Six Triple Eight Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>The Six Triple Eight</h2>
                    <p><strong>Director:</strong> Tyler Perry</p>
                    <p><strong>Genre:</strong> History, Drama, War, Period Drama</p>
                    <p><strong>Synopsis:</strong> During World War II, 855 women joined the fight to fix the three-year backlog of undelivered mail. Faced with discrimination and a country devastated by war, they managed to sort more than 17 million pieces of mail ahead of time.</p>
                    <p><strong>Rating:</strong> PG-13</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('The Six Triple Eight', this)" title="Add to My List">
                <span class="btn-icon">+</span>
                <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('The Six Triple Eight', this)" title="Watch Later">
                <span class="btn-icon">🕒</span>
                <span class="btn-text">Watch Later</span>
                </button>
                </div>
                </div>
            </section>

            <!-- Movie 4: Four Sisters and a Wedding -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('four-sisters-and-a-wedding')">
                    <img src="filmpics/foursisters.jpg" alt="Four Sisters and a Wedding Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Four Sisters and a Wedding</h2>
                    <p><strong>Director:</strong> Cathy Garcia-Sampana</p>
                    <p><strong>Genre:</strong> Filipino, Comedy, Drama</p>
                    <p><strong>Synopsis:</strong> Four sisters try to stop their younger brother's wedding; in the process, all discover resentments among one another.</p>
                    <p><strong>Cast:</strong> Bea Alonzo, Angeline Locsin, Toni Gonzaga, Shaina Magdayao, Enchong Dee</p>
                    <p><strong>Rating:</strong> PG-13</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('Four Sisters and a Wedding', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('Four Sisters and a Wedding', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

            <!-- Movie 5: When Marnie was there -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('when-marnie-was-there')">
                    <img src="filmpics/marnie.jpg" alt="When Marnie Was There Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>When Marnie Was There</h2>
                    <p><strong>Director:</strong> Hiromasa Yonebayashi</p>
                    <p><strong>Genre:</strong> Japanese, Anime, Family, Mystery,</p>
                    <p><strong>Synopsis:</strong> Anna, a shy 12-year-old girl, is sent to spend time with her aunt and uncle who live in the countryside, 
                        where she meets Marnie. The two become best friends. But Anna gradually discovers that Marnie is not quite who she appears to be.</p>
                    <p><strong>Cast:</strong> Sara Takatsuki, Kasumi Arimura, Nanako Matsushima</p>
                    <p><strong>Rating:</strong> PG</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('When Marnie Was There', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('When Marnie Was There', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

            <!-- Movie 6: Godzilla x Kong New Empire -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('godzilla-x-kong-new-empire')">
                    <img src="filmpics/Godzilla x Kong New Empire.jpg" alt="Godzilla x Kong New Empire Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Godzilla x Kong: New Empire</h2>
                    <p><strong>Director:</strong> Adam Wingard</p>
                    <p><strong>Genre:</strong> Action, Drama, Science Fiction, Thriller, Adventure, Fantasy</p>
                    <p><strong>Synopsis:</strong> Godzilla and the almighty Kong face a colossal threat hidden deep within the planet, challenging their very existence and the survival of the human race.</p>
                    <p><strong>Cast:</strong> Kaylee Hottle, Rebecca Hall, Dan Stevens, Brian Tyree Henry, Nicola Crisa, Fala Chen, Rachel House, Mercy Cornwall</p>
                    <p><strong>Rating:</strong> PG-13</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('Godzilla x Kong: New Empire', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('Godzilla x Kong: New Empire', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

            <!-- Movie 7: Jumanji: Welcome to the Jungle -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('jumanji-welcome-to-the-jungle')">
                    <img src="filmpics/JUMANJI WELCOME TO THE JUNGLE.jpg" alt="Jumanji: Welcome to the Jungle Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Jumanji: Welcome to the Jungle</h2>
                    <p><strong>Director:</strong> Jake Kasdan</p>
                    <p><strong>Genre:</strong> Comedy, Action, Adventure, Fantasy</p>
                    <p><strong>Synopsis:</strong> Four high school kids discover an old video game console and are drawn into the game's jungle setting, literally becoming the adult avatars they chose. What they discover is that you don't just play Jumanji - you must survive it. To beat the game and return to the real world, they'll have to go on the most dangerous adventure of their lives, discover what Alan Parrish left 20 years ago, and change the way they think about themselves - or they'll be stuck in the game forever.</p>
                    <p><strong>Cast:</strong> Dwayne Johnson, Jack Black, Kevin Hart, Karen Gillan, Nick Jonas, Alex Wolff, Madison Iseman, Bobby Cannavale</p>
                    <p><strong>Rating:</strong> PG-13</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('Jumanji: Welcome to the Jungle', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('Jumanji: Welcome to the Jungle', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

            <!-- Movie 8: Bad Boys for Life -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('bad-boys-for-life')">
                    <img src="filmpics/BAD BOYS FOR LIFE.jpg" alt="Bad Boys for Life Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Bad Boys for Life</h2>
                    <p><strong>Director:</strong>  Adil El Arbi & Bilall Fallah</p>
                    <p><strong>Genre:</strong> Action, Comedy, Buddy cop, Thriller, Drama, Mystery, Suspense, Crime Film, Detective Fiction, Crime Fiction, Police Procedural</p>
                    <p><strong>Synopsis:</strong> The wife and son of a Mexican drug lord embark on a vengeful quest to kill all those involved in his trial and imprisonment -- including Miami Detective Mike Lowrey. When Mike gets wounded, he teams up with partner Marcus Burnett and AMMO -- a special tactical squad -- to bring the culprits to justice. But the old-school, wisecracking cops must soon learn to get along with their new elite counterparts if they are to take down the vicious cartel that threatens their lives.</p>
                    <p><strong>Cast:</strong> Will Smith, Michael Bay, Jacob Scipio, Vanessa Hudgens, Kate del Castillo, Joe Pantoliano, Alexander Ludwig, Paola Núñez</p>
                    <p><strong>Rating:</strong> R</p>
                    <div class="action-buttons">
            <button class="add-to-list-btn" onclick="addToList('Bad Boys for Life', this)" title="Add to My List">
                <span class="btn-icon">+</span>
                <span class="btn-text">Add to List</span>
            </button>
            <button class="watch-later-btn" onclick="addToWatchLater('Bad Boys for Life', this)" title="Watch Later">
                <span class="btn-icon">🕒</span>
                <span class="btn-text">Watch Later</span>
            </button>
        </div>
                </div>
            </section>

            <!-- Movie 9: Transformers One  -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('transformers-one')">
                    <img src="filmpics/Transformers One.jpg" alt="Transformers One Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>Transformers One</h2>
                    <p><strong>Director:</strong> Josh Cooley</p>
                    <p><strong>Genre:</strong> Animation, Action, Science Fiction, Adventure, Fantasy, Family Film </p>
                    <p><strong>Synopsis:</strong> Once upon a time, Optimus Prime and Megatron were friends bonded like brothers who managed to change the fate of the Cybertron planet forever. This is their untold original story, before they end up being bitter opponents.</p>
                    <p><strong>Cast:</strong>  Chris Hemsworth, Brian Tyree Henry, Keegan-Michael Key, Scarlett Johansson, Jon Bailey, Steve Buscemi, Jon Hamm, Laurence Fishburne</p>
                    <p><strong>Rating:</strong> PG</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('Transformers One', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('Transformers One', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

            <!-- Movie 10: The Hangover -->
            <section class="movie-card">
                <div class="movie-poster" onclick="openTrailer('the-hangover')">
                    <img src="filmpics/The Hangover.jpg" alt="The Hangover Poster">
                    <div class="play-overlay">
                        <div class="play-button">▶</div>
                    </div>
                </div>
                <div class="movie-details">
                    <h2>The Hangover</h2>
                    <p><strong>Director:</strong> Todd Phillips</p>
                    <p><strong>Genre:</strong> Comedy, Adventure, Drama, Mystery, Detective fiction, Crime fiction, Police procedural</p>
                    <p><strong>Synopsis:</strong> Two days before his wedding, Doug (Justin Bartha) and three friends (Bradley Cooper, Ed Helms, Zach Galifianakis) drive to Las Vegas for a wild and memorable stag party. In fact, when the three groomsmen wake up the next morning, they can't remember a thing; nor can they find Doug. With little time to spare, the three hazy pals try to re-trace their steps and find Doug so they can get him back to Los Angeles in time to walk down the aisle.</p>
                    <p><strong>Cast:</strong> Bradley Cooper, Ed Helms, Zach Galifianakis, Justin Bartha, Ken Jeong, Todd Phillips, Heather Graham, Sasha Barrese</p>
                    <p><strong>Rating:</strong> R</p>
                    <div class="action-buttons">
                <button class="add-to-list-btn" onclick="addToList('The Hangover', this)" title="Add to My List">
                    <span class="btn-icon">+</span>
                    <span class="btn-text">Add to List</span>
                </button>
                <button class="watch-later-btn" onclick="addToWatchLater('The Hangover', this)" title="Watch Later">
                    <span class="btn-icon">🕒</span>
                    <span class="btn-text">Watch Later</span>
                </button>
            </div>
                </div>
            </section>

        </div>
    </main>

    <!-- Video Modal -->
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeTrailer()">&times;</span>
            <video id="trailerVideo" controls>
                <source id="videoSource" src="" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Movie Vault. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>