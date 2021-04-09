var numpairs = 0;
var logLastPaired = 0;
var countPaired = 0;
var counttap = 0;
var openedCards = [];
var backCards = [];
var allmatched = [];
var timer = 0;
var starttheTime;

var resetAll = function(){
	numpairs = 0;
	countPaired = 0;
	counttap = 0;
	openedCards = [];
	backCards = [];
	allmatched = [];
	stopTimer();
}

$(document).ready(function(){
	$('.controls').hide();
	$('.result').hide();
	$('.howtoplay').hide();
	$('.mainIndex').on('tap','.btnSelect',function(){
		logLastPaired = 0;
		$('.mainIndex').delay(200).fadeOut();
		load_cards(parseInt($(this).data("pairs")));
		logLastPaired = parseInt($(this).data("pairs"));
		$('.controls').delay(500).fadeIn();
		starttheTime = setInterval(function(){timer=timer+1;console.log(timer);},1000);
		
		$('#reset').data("pairs",logLastPaired);
		
	});
	
	$('.cards_container').on('doubletap','.back_deck',function(event){
		backCards = [];
		openedCards = [];
		counttap = 0;
		$(this).fadeIn();
	});
	
	$('.cards_container').on('tap','.back_deck',function(){
		console.log('tapped');
		counttap++;
		$(this).fadeOut();
		openedCards.push($(this).next().data("card"));
		console.log(openedCards);
		backCards.push($(this).attr("id"));
		console.log(backCards);
		matchOpen();
				
	});
	
	$('.controls').on('tap','#reset',function(){
		resetAll();
		$('.cards_container').empty();
		load_cards(parseInt($(this).data("pairs")));
		starttheTime = setInterval(function(){timer=timer+1;console.log(timer);},1000);
		console.log('reset');
	});
	$('.controls').on('tap','#backtomain',function(){
		resetAll();
		$('.mainIndex').delay(500).fadeIn();
		$('.controls').hide();
		$('.cards_container').empty();
	});
	
	$('.close').on('tap',function(){
		$('.result').delay(300).fadeOut();
	});
	
	$('.btnSelectAbout').on('tap',function(){
		$('.howtoplay').delay(300).fadeIn();
	});
	
	$('.about_close').on('tap',function(){
		$('.howtoplay').delay(300).fadeOut();
	});
	
	
	
});






function matchOpen(){
	if(counttap==2){
		if(backCards[0] != backCards[1]){
			if(openedCards[0] === openedCards[1]) {
				for(var xx = 0; xx<backCards.length; xx++){
					allmatched.push(backCards[xx]);
				}
				countPaired = countPaired+1;
				if(countPaired == numpairs) {
					//setTimeout(function(){alert('completed in '+timer+' secs')},500)
					
					setTimeout(function(){$('.result').show()},500);
					$('.result_pairs').text('Matched '+ numpairs +' Pairs in');
					$('.result_time').text(timer +' Seconds');
					
				}
			}
			else {
				
				$("#"+backCards[0]).delay(200).fadeIn();
				$("#"+backCards[1]).fadeIn();
				
				$('.back_deck').fadeIn();
				for(var am=0; am<allmatched.length; am++){
					$("#"+allmatched[am]).hide();
				}
			}
			backCards = [];
			openedCards = [];
			counttap = 0;
			console.log("All matched: "+allmatched);
		}
		else {
			backCards = [];
			openedCards = [];
			counttap = 0;
		}
		
	}
	
	
}

function shuffle(a) {
	var j, x, i;
	for (i = a.length; i; i--) {
		j = Math.floor(Math.random() * i);
		x = a[i - 1];
		a[i - 1] = a[j];
		a[j] = x;
	}
}


function stopTimer(){
	clearInterval(starttheTime);
	timer = 0;
}

function load_cards(pairs){
	numpairs = pairs;
	var cardsLoc = [];
	var cardsValue = new Array(
		"2S","3S","4S","5S","6S","7S","8S","9S","10S","AS","JS","QS","KS",
		"2C","3C","4C","5C","6C","7C","8C","9C","10C","AC","JC","QC","KC",
		"2H","3H","4H","5H","6H","7H","8H","9H","10H","AH","JH","QH","KH",
		"2D","3D","4D","5D","6D","7D","8D","9D","10D","AD","JD","QD","KD"
	);
	var randPosition;
	
	setTimeout(function(){
		
		for(var y=0; y<(pairs*2); y++){
			$('.cards_container').append("<div class='deck'><img id='cont"+y+"' class='back_deck' src='http://localhost/social/gameclub/card-mix-pairs/lib/deck/back.png'></div>");
			cardsLoc.push(y);
		}
		
		shuffle(cardsLoc);
		
		for(var x=0; x<pairs; x++){
			var randValue = Math.floor(Math.random() * cardsValue.length);
			var randType = Math.floor(Math.random() * 4);
			randPosition = Math.floor(Math.random() * cardsLoc.length);
			$('.deck').eq(cardsLoc[randPosition]).append("<img data-card="+cardsValue[randValue]+" class='front_deck' src='http://localhost/social/gameclub/card-mix-pairs/lib/deck/"+ cardsValue[randValue]+".png'>");
			cardsLoc.splice(randPosition,1);
			
			randPosition = Math.floor(Math.random() * cardsLoc.length);
			$('.deck').eq(cardsLoc[randPosition]).append("<img data-card="+cardsValue[randValue]+" class='front_deck' src='http://localhost/social/gameclub/card-mix-pairs/lib/deck/"+ cardsValue[randValue]+".png'>");
			cardsLoc.splice(randPosition,1);
			
			cardsValue.splice(randValue,1);
		
	}
		
	},500)
	
	
}



