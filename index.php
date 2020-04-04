<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Index</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">

  </head>
  <body>
	<?php
	  include('navbar.php');
	?>
    <div class="jumbotron jumbotron-fluid text-left" style="background-image: linear-gradient(to bottom right, cyan, rgb(186, 107, 255));">
       <h1 class="display-4" style="padding-left: 20px">Ryan Grogan</h1>
		<p class="lead" style="padding-left: 20px">Portfolio Website</p>
    </div>
    <div class="container">
	  <div class="h1 text-center">Introduction</div>
   	  <div class="row text-center">
       	 <div class="col-lg-6 offset-lg-3 col-xl-6 lead">Welcome to my portfolio website. This site hosts content and works that I have created. These works are demonstrations of my knowledge, capabilities, and experience.</div>
   	  </div>
		<br>
       	<hr>
       	<br>
		
		<div class="h1 text-center">Bio</div>
		<br>
		<div class="row">
			<div class="col lead">
				<p style="text-indent: 3em;">I have been a creator for as long as I can remember. When I was young enough to be in preschool, I remember using a very old distro of linux on the family computer. My father was very much into computer science, mainly network security. Later in my life I had a computer with a graphics card that both my brother and I shared. It was on this computer that my love for computing flourished. </p>
				<p style="text-indent: 3em;"> On this computer, I had everything I needed; An internet connection and video games. One of the first PC games I ever played was Minecraft, a title whose popularity was solely reliant upon word of mouth. I had visited a friend and saw him playing it and had managed to remember the name of it long enough to search it when I got home. This game had a profound effect on me. I fell in love with the game immediately, mostly because of the simplicity of the environment yet the complexity of the mechanics. Minecraft is a cuboid game where you can pick up cubes and place them almost anywhere you wanted. This sparks a creative drive in anyone who has known Minecraft.</p>
				<p style="text-indent: 3em;">After experiencing Minecraft, I had always wanted more from it. This thirst lead me to MinecraftForums.net, where I discovered a modding community. Other people just like me, who wanted more from Minecraft, had gathered and figured out how to deobfuscate and decompile Minecraft. This sparked a huge modding community that has left marks still visible on the community as a whole today. This community (and youtube) had lead me into the world of coding. I knew nothing of how it worked, or even what a primitive type was. Despite my lack of understanding, I still knew that I wanted to make something new for Minecraft. After many hours of Minecraft Java tutorials after school, I had a very simple mod that was my very own, Sertruse. It added a new resource that could be found and mined underground. The ingots from this ore can be used to craft armor and tools. Even though I had no true knowledge of what the code did or how it worked, I was still able to replicate what I saw in the videos, and even add a couple of things that were not originally covered in the tutorials.</p>
				<p style="text-indent: 3em;">Many other computer science branches were introduced to me through Minecraft alone. I learned basic logic from Redstone, which is a primitive electrical wiring. It can carry a signal, and there are specific ways in which the current is transferred. I was able to build logic gates, flip-flops, and other kinds of circuits. I learned how to host Minecraft servers, which were my first steps into the linux terminal.</p>
				<p style="text-indent: 3em;">Minecraft was just the beginning of my endeavour into the world of computer science. From Minecraft I went to other games, such as Garry's Mod, which was a sandbox environment that used the Half-Life 2 Engine, commonly known as Source. This game, along with Steam's Workshop capabilities, introduced me to Lua scripting. Once again, I was not old enough to understand the code itself, but I still watched tutorials on one of my favorite Addons to the game: Wiremod. Wiremod was essentially a more advanced Redstone. It had controllers, logic, adders, and all sorts of circuits. It was vastly superior and difficult. I was not able to learn the more complex things, but I still understood the basics.</p>
				<p style="text-indent: 3em;">From Garry's Mod I moved to Fallout: New Vegas. This game was yet another open-world sandbox, except this time there were RPG and combat elements mixed in. What I learned from Fallout: New Vegas was how to use the Garden of Eden Creation Kit, known as the G.E.C.K. This tool allowed me to add my own custom content (mods) to the game. I made a couple of mods such as a player home and bunker where the player could relax and feel safe. Using this tool taught me a couple of things, such as navmeshes for NPCs to traverse and texture clipping. I learned a couple of things specific to the G.E.C.K. such as in-game computer options, which was a sudo terminal.</p>
				<p style="text-indent: 3em;">These skills I have learned have been resolidified throughout my life. With the many different games I have played, the college courses I have taken, and personal aspirations, I have a skillset very broad and wide. The content within this site is almost a trip through memory lane for me. For the past few weeks I have been racking my brain on the many things I've done in the past, evaluating and choosing works that I should present. Many of these works were created on my own time and outside of a classroom environment. A majority of these works are personal achievements and hold a special part in my own life. Being able to showcase my creations is a humbling opportunity, and I hope that you enjoy some of the creations here.</p>
			</div>
		</div>
		
       	<br>
       	<hr>
       	<br>
   	  <div class="row">
          <div class="col-md-4">
             <div class="card">
                <img class="card-img-top" src="images/csgo_map.PNG" alt="Card image cap">
                <div class="card-body">
                   <h4 class="card-title">CS:GO</h4>
                   <p class="card-text">Here is a map I made for Counter-Strike: Global Offensive. It's purpose was mainly for 1 v 1 game.</p>
                   <br><br>
                   <a href="/content.php#CSGO" class="btn btn-primary">Show me!</a>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="card">
                <div class="card-body">
                   <h5 class="card-title">Programming Experience</h5>
                   <h6 class="card-subtitle mb-2 text-muted">Languages</h6>
                   <p class="card-text">Here are some of the programming languages I have learned:</p>
                </div>
             </div>
             <div class="card">
				 <ul class="list-group text-center">
				 	<li class="list-group-item">Python</li>
					<li class="list-group-item">Java</li>
					<li class="list-group-item">C#</li>
					<li class="list-group-item">Javascript</li>
					<li class="list-group-item">HTML</li>
					<li class="list-group-item">PHP</li>
					<li class="list-group-item">SWIFT</li>
				 </ul>
             </div>
          </div>
          <div class="col-md-4">
             <div class="card">
                <img class="card-img-top" src="images/unity2.PNG" alt="Card image cap">
                <div class="card-body">
                   <h5 class="card-title">Unity</h5>
                   <p class="card-text">Here is a sneakpeak at my Unity based game</p>
                </div>
                <div class="card-body">
                   <a href="/content.php#Unity" class="card-link">Content</a>
                </div>
             </div>
          </div>
       </div>
       <br>
       <hr>
       <?php
		include("/footer.php");
		?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>
