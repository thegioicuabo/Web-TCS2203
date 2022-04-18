<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Greenwich FPT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="test.css">
  </head>
  <body>

    <!-- header -->
    <header style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(images/banner-bg.jpg) center/cover no-repeat fixed;">
      <nav class = "navbar">
        <div class = "container">
          <a href = "Home.php" class = "navbar-brand">Greenwich FPT</a>
          <div class = "navbar-nav">
              <?php include('logincode.php'); ?><?php if(!isset($_SESSION['auth_user_id'])){?><a class="nav-link" href="#"><i class="fa fa-user"></i>Account</a><?php }else{?><a class="nav-link" href="login.php">Logout</a><?php }?>
            <div class="nav-item"><a class="nav-link" href="#"><?php if(isset($_SESSION['authuser_name'])){echo $_SESSION['authuser_name'];}?></a></div>
            <a href = "Home.php"><i class="fa fa-home"></i> Home</a>
            <div class="dropdown">
              <a class="dropbtn"><i class="fa fa-align-justify"></i>Type</a>
              <div class="dropdown-content">
                <a href="blogpage1.php">Music</a>
                <a href="blogpage2.php">Fastion</a>
                <a href="blogpage3.php">Game E-Sport</a>
                <a href="blogpage4.php">Movie</a>
                <a href="blogpage5.php">Sports</a>
                <a href="blogpage6.php">Study</a>
              </div>
            </div>
            <a href = "Post.php"><i class="fa fa-arrow-up"></i>post</a>
            <a href = "View.php"><i class="fa fa-eye"></i>view</a>
            <a href = "about.php"><i class="fa fa-address-card"></i>about</a>
          </div>
        </div>
      </nav>
      <div class = "banner">
        <div class = "container">
          <h1 class = "banner-title">
            <span>FPT</span> Greenwich
          </h1>
          <p>everything you want to know about the life around us.</p>
          <form>
            <input type = "text" class = "search-input" placeholder="seacrch . . .">
            <button type = "submit" class = "search-btn">
              <i class = "fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </header>
    <!-- end of header -->
    
    <!-- design -->
    <section class = "design" id = "design">
      <div class = "container">
        <div class = "title">
          <h2>View Post With The Most Views.</h2>
          <p>♥♥♥ recent post on the blog ♥♥♥</p>
        </div>

        <div class = "design-content">
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/art-design-2.jpg" alt = "">
              <span><i class = "far fa-thin fa-eye"></i> 9k5</span>
              <span>Music Articles</span>
            </div>
            <div class = "design-title">
              <a href = "blogpage1.php">Make a great musical art catalog that everyone can reader.</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/art-design-1.jpg" alt = "">
              <span><i class = "far fa-thin fa-eye"></i> 2k3</span>
              <span>Fastion Articles</span>
            </div>
            <div class = "design-title">
              <a href = "blogpage2.php">Make a great fashion art portfolio for the reader.</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/art-design-3.jpg" alt = "">
              <span><i class = "far fa-thin fa-eye"></i> 4k5</span>
              <span>Game E-Sport Articles</span>
            </div>
            <div class = "design-title">
              <a href = "blogpage3.php">Make a art portfolio that plays great sports games for your readers. </a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/art-design-4.jpg" alt = "">
              <span><i class = "far fa-thin fa-eye"></i> 8k6</span>
              <span>Movie Articles </span>
            </div>
            <div class = "design-title">
              <a href = "blogpage4.php">make a great movie art portfolio for the reader.</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/art-design-5.jpg" alt = "">
              <span><i class = "far fa-thin fa-eye"></i> 7k9</span>
              <span>Sports Articles </span>
            </div>
            <div class = "design-title">
              <a href = "blogpage5.php">make a great sports art portfolio for the reader.</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "design-item">
            <div class = "design-img">
              <img src = "images/art-design-6.jpg" alt = "">
              <span><i class = "far fa-thin fa-eye"></i> 9k2</span>
              <span>Study Articles</span>
            </div>
            <div class = "design-title">
              <a href = "blogpage6.php">make a great studying art portfolio for your readers.</a>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of design -->

    
    <!-- blog -->
    <section class = "blog" id = "blog">
      <div class = "container">
        <div class = "title">
          <h2>Latest Post Type.</h2>
          <p>♥♥♥ Recent Type About Post ♥♥♥</p>
        </div>
        <div class = "blog-content">
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-1.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>July 1, 2019</span>
              <h2>
                "Give it to me" is a song by male singer-songwriter Son Tung M-TP from his first studio album, We (2020).
              </h2>
              <p>
                The song was composed and performed by Son Tung M-TP with a collaboration with American rapper Snoop Dogg, and was released as the second single from the album. 
                The song was first released on YouTube as the second single from his second studio album, We (2020) and has set a remarkable record of 25,873,058 views after 24 hours. launch, over 3.6 million likes, 629,545 premiere views, 1 million views after 8 minutes, 2 million after 14 minutes, 10 million after 3 hours and 17 minutes after release at 20:00 (GMT+7 ) July 1, 2019. 
                This is the male singer's first song in 2019 after more than a year of absence from "Run now".
              </p>
                <p>...</p>
              <a href = "blogpage1.php">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-2.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>December 10, 2019</span>
              <h2>
                Blackpink Róse Airport Fashion Style 2016 - 2019
              </h2>
              <p>Park Chae-young (Korean: 박채영; English name: Roseanne Park, born 11 February 1997), better known by her stage name Rosé (Hangul: 로제) is a singer-songwriter from New Zealand. 
                South Korean, member of the girl group Blackpink founded and managed by YG Entertainment. 
                Born in New Zealand and raised in Australia, Rosé officially signed with the Korean company YG Entertainment after an audition in 2012 and then became a trainee here for 4 years. 
                She debuted as the lead vocalist of Blackpink in August 2016. 
                In March 2021, she released her debut solo single album titled R.
              </p>
                <p>...</p>
              <a href = "blogpage2.php">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-3.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>October 27, 2009</span>
              <h2>League of Legends or LoL is a multiplayer online battle arena (MOBA - Multiplayer Online Battlefield Arena) video game.</h2>
              <p>Developed and published by Riot Games on Windows and MacOS platforms, inspired by the Defense of the Ancients mod for the video game Warcraft III: Frozen Throne. 
                It is a free to play game and is powered by micro-transactions. Since its release, League of Legends has been very well received, and has grown in popularity in the following years. 
                According to a 2012 Forbes article, League of Legends is the most played computer game in North America and Europe in terms of hours played. As of January 2014, there were 67 million players playing League of Legends per month, 27 million per day, and more than 7.5 million concurrently during peak times. This is considered one of the most successful games of all time. As of September 2016, it is estimated that there are more than 100 million players per month. League of Legends has grown in popularity and built highly competitive environments. Riot Games organizes regional tournaments. These regional tournaments select the best teams from each region to compete in the Mid-Season Invitational and World Championships. On October 16, 2019, on the 10th anniversary of League of Legends, Riot Games announced that there will be a shortened version of the game called League of Legends: Wild Rift. of Legends: Wild Rift) will be released on Console and Mobile platforms (Android and iOS operating systems) in early 2020. 
              </p>
              <p>...</p>
                <a href = "blogpage3.php">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-4.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>December 7, 1993</span>
              <h2>Marvel Studios, LLC (originally Marvel Films from 1993 to 1996) is an American film studio based on The Walt Disney Studios in Burbank, California.</h2>
              <p>Formerly a division of Marvel Entertainment, the studio is a subsidiary of The Walt Disney Studios, which is a wholly owned division of The Walt Disney Company, with film producer Kevin Feige serving as chairman. .
                Since 2008, Marvel Studios has released 27 films in the Marvel Cinematic Universe, from Iron Man (2008) to Spider-Man: No Way Home (2021), and 5 TV series since 2021, from WandaVision (2021) to Hawkeye (2021). 
                Drama What If...? (2021) is the studio's first animated production. These movies and TV series all share continuity with each other, along with studio-produced One-Shots. The television series produced by Marvel Television also acknowledges continuity. 
                In addition to the MCU, Marvel Studios is also involved in the production of other Marvel character series that have exceeded $1 billion at the North American box office, including the X-Men and Spider-Man franchises.
              </p>
              <p>...</p>
                <a href = "blogpage4.php">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-5.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>October 26, 1863</span>
              <h2>
                Association football or simply Football, Soccer is a team sport played with a spherical ball between two teams consisting of 11 players on each side.
              </h2>
              <p>
                It has around 250 million players in more than 200 countries and regions, making it the most popular sport in the world. 
                It plays on a rectangular surface called a football field with a goal at each end. 
                The goal is to score in the opponent's goal. 
                The team with the most goals wins.
              </p>
              <p>
                Football is played according to a set of rules called the Laws of Football. 
                The ball has a circumference of 68 to 70 cm (27 to 28 in). 
                The two teams compete to put the ball into the opponent's goal (between the post and under the crossbar), thereby scoring. 
                Players are not allowed to use their hands or touch the ball during play, with the exception of the goalkeeper in the penalty area. 
                Other players mainly use their feet to attack or pass the ball, but can also use any other part of the body except the hands and arms. 
                The team that scores more goals at the end of the game is the winner; If both teams score an equal number of goals, a tie is awarded or the game goes to extra time or a penalty shootout depending on the format of the game. 
                Each team is led by a captain, who has only official responsibility under the Rules of Football: to represent their team toss a coin before the start of a match or penalty shootout. 
              </p>
              <p>...</p>
              <a href = "blogpage5.php">Read More</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/blog-p-6.jpg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>20 January, 2020</span>
              <h2>
                Learning is the process of acquiring new understandings, knowledge, behaviours, skills, values, attitudes and interests.
              </h2>
              <p>
                The ability to learn is seen in humans, animals, and some machines; There is also evidence for some kind of learning in some plant species. 
                Some learning is immediate, caused by a single event (e.g. cutting a finger while playing a knife), but many skills and knowledge are acquired through repeated experience. 
                Changes caused by learning often last a lifetime, and it is difficult to distinguish learned material that appears to be "lost" from material that cannot be retrieved.
              </p>
              <p>...</p>
              <a href = "blogpage6.php">Read More</a>
            </div>
          </div>
          <!-- end of item -->
        </div>
      </div>
    </section>
    <!-- end of blog -->

    <!-- about -->
    <section class = "about" id = "about">
      <div class = "container">
        <div class = "about-content">
          <div>
            <img src = "images/about-bg.jpg" alt = "">
          </div>
          <div class = "about-text">
            <div class = "title">
              <h2>Greenwich FPT</h2>
              <p>Creating a place for people to share articles is our passion.</p>
            </div>
            <p>Socialis media dispositio popularis methodus venalicium est, quia haec scribens articulorum facilis est et fortibus auditoribus aedificandis adhiberi possunt. Social media nuntia plerumque breves sunt, ut facilius et promptius ad scribendum reddantur!♥!</p>
            <p>Isti autem articuli faciliter sunt receptibiles. Et quantum ad refugium et interesting information present is exacte cur lectores diligent eos. Articulus vexillum late vel per magnas catervas online brevi tempore divulgari potest!♥!</p>
            <p>Articulus viralis accedit, magnas audientias allicit, socialem vim habet, et honestus ad altam ROI ducere potest. Articuli etiam haec adhibentur in vendendo solvendo, quo etiam simplicius utendum est!♥!</p>
            <p><span>Email: </span>greenwichfpt@fpt.edu.vn</p>
            <p><span>Phone Number: </span>093 310 85 54.</p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- end of about -->

    <!-- footer -->
    <footer>
      <div class = "social-links">
        <a href = "https://www.facebook.com"><i class = "fab fa-facebook-f"></i></a>
        <a href = "https://www.twitter.com"><i class = "fab fa-twitter"></i></a>
        <a href = "https://www.instagram.com"><i class = "fab fa-instagram"></i></a>
        <a href = "https://www.youtube.com"><i class = "fab fa-youtube"></i></a>
      </div>
      <span>Greenwich FPT.</span>
    </footer>
    <!-- end of footer -->
  </body>
</html>