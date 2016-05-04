$(document).ready(function() {
	$("marquee").append(getQuote());
	scroll();
});

function scroll() 
{
	var marquee = $('div.marquee');
	marquee.each(function() {
	    var mar = $(this),indent = mar.width();
	    mar.marquee = function() {
	        indent--;
	        mar.css('text-indent',indent);
	        if (indent < -1 * mar.children('div.marquee-text').width()) {
	            indent = mar.width();
	        }
	    };
	    mar.data('interval',setInterval(mar.marquee,1000/60));
	})
};

function getQuote()
{
	var quotes = 
	[
		"Life is wonderful. Without it we'd all be dead.",
		"Daddy, why doesn't this magnet pick up this floppy disk?",
		"Give me ambiguity or give me something else.",
		"I.R.S.: We've got what it takes to take what you've got!",
		"We are born naked, wet and hungry. Then things get worse.",
		"Make it idiot proof and someone will make a better idiot.",
		"He who laughs last thinks slowest!",
		"Always remember you're unique, just like everyone else.",
		"More hay, Trigger?\" \"No thanks, Roy, I'm stuffed!",
		"A flashlight is a case for holding dead batteries.",
		"Lottery: A tax on people who are bad at math.",
		"Error, no keyboard - press F1 to continue.",
		"There's too much blood in my caffeine system.",
		"Artificial Intelligence usually beats real stupidity.",
		"Hard work has a future payoff. Laziness pays off now.",
		"Very funny, Scotty. Now beam down my clothes.",
		"Puritanism: The haunting fear that someone, somewhere may be happy.",
		"Consciousness: that annoying time between naps.",
		"Don't take life too seriously, you won't get out alive.",
		"I don't suffer from insanity. I enjoy every minute of it.",
		"Better to understand a little than to misunderstand a lot.",
		"The gene pool could use a little chlorine.",
		"When there's a will, I want to be in it.",
		"Okay, who put a \"stop payment\" on my reality check?",
		"We have enough youth, how about a fountain of SMART?",
		"Programming is an art form that fights back.",
		"Daddy, what does FORMATTING DRIVE C mean?",
		"My mail reader can beat up your mail reader.",
		"Never forget: 2 + 2 = 5 for extremely large values of 2.",
		"Nobody has ever, ever, EVER learned all of WordPerfect.",
		"To define recursion, we must first define recursion.",
		"Good programming is 99% sweat and 1% coffee.",
		"Home is where you hang your @",
		"The E-mail of the species is more deadly than the mail.",
		"A journey of a thousand sites begins with a single click.",
		"You can't teach a new mouse old clicks.",
		"Great groups from little icons grow.",
		"Speak softly and carry a cellular phone.",
		"C:\ is the root of all directories.",
		"Don't put all your hypes in one home page.",
		"Pentium wise; pen and paper foolish.",
		"The modem is the message.",
		"Too many clicks spoil the browse.",
		"The geek shall inherit the earth.",
		"A chat has nine lives.",
		"Don't byte off more than you can view.",
		"Fax is stranger than fiction.",
		"What boots up must come down.",
		"Windows will never cease.   (ed. oh sure...)",
		"In Gates we trust.    (ed.  yeah right....)",
		"Virtual reality is its own reward.",
		"Modulation in all things.",
		"A user and his leisure time are soon parted.",
		"There's no place like http://www.home.com",
		"Know what to expect before you connect.",
		"Oh, what a tangled website we weave when first we practice.",
		"Speed thrills.",
		"Give a man a fish and you feed him for a day; teach him to use the Net and he won't bother you for weeks."
	];

	return quotes[Math.floor(Math.random()*quotes.length)];
};