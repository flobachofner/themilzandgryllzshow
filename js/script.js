// JavaScript Document


var generatorButton = document.getElementById("generator");
var saveButton = document.getElementById("saveButton");

var firstIndex = ["have to stand all day", "have super sensitive taste", "have hands that kept growing", "go bald", "have edible spaghetti hair", "have no eyebrows", "be born with an elephant trunk", "have wet socks on your feet for a year", "only be able to listen to Justin Bieber", "sneeze once every ten minutes", "look like Jar Jar Binks", "be homeless", "cut off one of your fingers", "have to say what comes to your mind immediately", "spend the rest of your life being itchy", "have no elbows", "live without music", "be a vegetarian", "be instantly forgotten", "not know your age", "only be able to whisper", "wrestle a bear", "forget who you are everytime it rains", "only be able to dress in lime green", "only be able to wear batik shirts", "never be able to leave your house again", "have a full unibrow", "spend five minutes with your naked mom in an elevator", "always have really slow WIFI", "always stink without knowing it", "match with mom on tinder", "have your browser history made public", "have minigolf be the only sport you can ever play", "walk in on your father balls deep in your mothers vagina", "get a tattoo that means a lot to you by a really bad tattoo artist", "eat your hair trimmings after every haircut", "have a permanent pimple on your face", "always have your kitchen stocked with everything you need but it’s all mixed up and unorganized", "lose your drivers license forever", "only be able to text using abbreviations", "blindly pick your outfit each day", "immediately projectile vomit every time you heard someone say the word “potato” ", "bathe in worms", "be in jail for 5 years", "buy all your underwear used", "never talk to your family again", "suddenly go blind", "give up alcohol for 2 years", "find a hidden camera in your toilet", "be cheated on (numerous times) and never know", "be forced to dance every time you heard music", "your only mode of transportation be a donkey", "have all dogs try to attack you when they see you", "be compelled to high five everyone you meet", "have to fart loudly every time you have a serious conversation", "live without the internet", "be unable to use search engines", "be alone for the rest of your life", "have one nipple", "blink twice the normal rate", "wake up each morning to find that a random animal appendage has replaced your nondominant arm", "have someone secretly give you LSD on a random day and time once every 6 months"];
var secondIndex = ["have to sit all day", "have super sensitive hearing", "have a nose that kept growing", "have an unshaveable beard", "sweat maple syrup", "have only one eyebrow", "be born with a giraffe neck", "have dry socks on your hands for a year", "only be able to see shrek movies", "burp loud everytime you see someone hot", "sound like Jar Jar Binks", "live without family and friends", "pay 5'000$ for the person you hate the most to go on a spa vacation", "never be able to speak again", "spend the rest of your life being tickled", "have no knees", "live without movies", "only drink water", "be remembered hatefully", "not know your name", "only be able to shout", "wrestle an alligator", "never be able to remember why you walked into a room", "only wear clothes with universal-print", "only be able to leave the house with visible suspenders", "only be able to stay at your house for five minutes at a time", "have your back COVERED in hair", "spend five days with ten chicken in an elevator", "always have shitty phone connection", "always smell something that stinks that no one else smells", "never be able to go on a second date", "have all the photos on your phone made public", "only be able to eat out at McDonalds", "have your parents walk in on you masturbating", "get a tattoo of a self-portrait on your back by the best tattoo artist in the world", "eat your nail clippings each time you cut your nails", "have an embarrassing birth mark on your butt", "always have your kitchen neat and organized but always missing something", "be on the no fly list forever", "only be able to text using emojis", "have your mom pick out your clothes every morning", "projectile vomit every time you saw a squirrel in real life or in a picture or video", "shower in vomit", "be in a coma for 10 years", "buy all your toothbrushes used", "never have sex again", "lose all of your memories", "give up texting forever", "find a hidden camera in your shower", "cheat on someone else and have to tell them", "be forced to sing along to any song you heard", "your only mode of transportation be a giraffe", "all birds try to attack you when they see you", "be compelled to give wedgies to anyone in a green shirt", "have to burp after every kiss", "live without AC and heating", "unable to use social media", "always be surrounded by annoying people", "have two belly buttons", "not be able to blink for 5 minutes but then have to close your eyes for 10 seconds every 5 minutes", "permanently replace your bottom half with an animal bottom of your choice", "have everyone in the world all take LSD at the same time once every 5 years"];

function ratherGenerator() {
	var firstIndexNo = Math.floor(Math.random(30) * firstIndex.length);
	var secondIndexNo = Math.floor(Math.random(30) * secondIndex.length);
	
	var firstPart = firstIndex[firstIndexNo];
	var secondPart = secondIndex[secondIndexNo];
	
	document.getElementById("part1").innerHTML = firstPart;
	document.getElementById("part2").innerHTML = secondPart;
}

function saveGenerator() {
	var firstIndexNo = Math.floor(Math.random(30) * firstIndex.length);
	
	var firstPart = firstIndex[firstIndexNo];
	var secondPart = secondIndex[firstIndexNo];
	
	document.getElementById("part1").innerHTML = firstPart;
	document.getElementById("part2").innerHTML = secondPart;
}


saveButton.onclick = saveGenerator;
generatorButton.onclick = ratherGenerator;
