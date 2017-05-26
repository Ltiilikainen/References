/**** VARIABLES ****/
var colours = colourConfigure();
//default difficulty
var numColours = 8;

var container = document.querySelector("#container");
container.innerHTML = addSquares();

var squares = document.querySelectorAll(".square");
//div to hold the colours
var back = document.querySelectorAll(".back");

var span = document.querySelector("span");

var resetButton = document.querySelector("#reset");
var modeButtons = document.querySelectorAll(".mode");

//variables used for check()
var check1;
var i1;
var check2;
var i2;

/**** INITIALISE GAME ****/

var game = {}
 
game.init = function()
{
  buttonSetup();
  //reset sets up the whole board
  reset();
}

game.init();

/**** FUNCTIONS ****/

/* Configure Array */
function colourConfigure()
{
  var col = [];
 //setting colours based on difficulty
  if(numColours === 8)
  {
    //define colours
    var temp = [
    "rgb(255, 87, 51)",
    "rgb(95, 225, 52)",
    "rgb(55, 52, 225)",
    "rgb(235, 92, 133)",
    "rgb(247, 253, 150)",
    "rgb(150, 228, 253)",
    "rgb(148, 215, 120)",
    "rgb(205, 9, 145)"];
    
    //shuffle
    shuffle(temp);
    
    //duplicate colours
     for(var i = 0; i < temp.length; i++)
     {
      for(var j = 0; j < 2; j++)
      {
        col.push(temp[i]);
      }
     }
    
  }
  else
  {
    var temp = [
     "rgb(150, 228, 253)",
     "rgb(148, 215, 120)",
     "rgb(205, 9, 145)",
     "rgb(61, 121, 90)",
     "rgb(183, 183, 184)",
     "rgb(255, 87, 51)",
     "rgb(95, 225, 52)",
     "rgb(55, 52, 225)",
     "rgb(235, 92, 133)",
     "rgb(247, 253, 150)"];
    
    shuffle(temp);
    
    for(var i = 0; i < temp.length; i++)
    {
       for(var j = 0; j < 2; j++)
     {
       col.push(temp[i]);
     }
    }
  }
  
  //shuffle again
  shuffle(col);
  
  //return array
  return col;
}

/* Configure Squares */

function addSquares()
{
  //define string
  var string = '<div class="square"><div class="front"></div><div class="back"></div></div>\n';
  //add divs to string
  for(var i = 1; i < numColours*2; i++)
  {
    string = string + '<div class="square"><div class="front"></div><div class="back"></div></div>\n';
  }
  
  //send string to container
  return string;
}

/* Button functions*/

function buttonSetup()
{
  //reset button
  resetButton.addEventListener("click", function()
                               {
                                  reset();
                               });
  //difficulty buttons
  for(var i = 0; i < modeButtons.length; i++)
  {
    modeButtons[i].addEventListener("click", function(){
                                    //toggle difficulty
                                    this.textContent === "Easy" ? numColours = 8: numColours = 10;
                                    
                                    //reset board
                                    reset();
                                    
                                    //toggle button styles
                                    modeButtons[0].classList.remove("selected");
                                    modeButtons[1].classList.remove("selected");
                                    this.classList.add("selected");
                                    });
  }
}

/* Draw board */

function draw()
{
  //difficulty setting: easy
  if(numColours === 8)
  {
    //set container to match difficulty
    container.style.maxWidth="600px";
    
    //loop through squares
    for(var i = 0; i < squares.length; i++)
    {
      //set difficulty class and background colour
      squares[i].classList.add("easy");
      back[i].style.backgroundColor = colours[i];
      
      //get the index and colour code
      squares[i].index = i;
      squares[i].colour = back[i].style.backgroundColor;
      
      //add click recognisers to all squares
      squares[i].addEventListener("click",function()
                                  {//ignore paired square
                                  if(this.paired === true)
                                  {
                                    return;
                                  }
                                  //check if square has already been flipped
                                  else if(this.index === i1)
                                    {
                                      //flip back around
                                      this.style.transform = "rotateY(0deg)";

                                      //clear i1 and check1 for further use
                                      i1 = undefined;
                                      check1 = undefined;
                                    }
                                    else
                                    {
                                      //flip square and run check
                                      this.style.transform = "rotateY(180deg)";
                                      check(this.colour, this.index);
                                    }
                                  });
    }
  }
  //difficulty setting: hard
  else
  {
    container.style.maxWidth="800px";
    
    for(var i = 0; i < squares.length; i++)
    {
      squares[i].classList.add("hard");
      back[i].style.backgroundColor = colours[i];
      
      squares[i].index = i;
      squares[i].colour = back[i].style.backgroundColor;
      
      squares[i].addEventListener("click",function()
                                  {
                                    //ignore paired square
                                    if(this.paired === true)
                                    {
                                      return;
                                    }
                                    //check if square has already been flipped
                                    else if(this.index === i1)
                                    {
                                      this.style.transform = "rotateY(0deg)";
                                    
                                      //clear i1 and check1 for further use
                                      i1 = undefined;
                                      check1 = undefined;
                                    }
                                    else
                                    {
                                      this.style.transform = "rotateY(180deg)";
                                      check(this.colour, this.index);
                                    }
                                  });
    }
  }
}

/* Shuffle array */

function shuffle(array)
 {
    var currentIndex = array.length;
    var tempValue; 
    var randomIndex;
 
   //continue as long as there are indexes left
    while(0 !== currentIndex)
    {
      //choose remaining index
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
 
      //temporary storage
      tempValue = array[currentIndex];
      //set new value to current index
      array[currentIndex] = array[randomIndex];
      //used index to temp sorage to be discarded from future iterations
      array[randomIndex] = tempValue;
    }
 }


/* Check flipped blocks */

function check(colour, index)
{
  //get check values
  if(check1 === undefined)
  {
    check1 = colour;
    i1 = index;
    return;
  }
  else if(check2 === undefined)
  {
    check2 = colour;
    i2 = index;

      //these only run if both i1 and i2 have been defined
      if(check1 !== check2)
      {
        //in case the two don't match flip blocks back around
        setTimeout(function(){
                 squares[i1].style.transform = "rotateY(0deg)";
                 squares[i2].style.transform = "rotateY(0deg)";
        }, 1000);
      }
      else
      {
        //recognise paired squares
        squares[i1].paired = true;
        squares[i2].paired = true;
       
        //check for winning conditions
        if(winCheck() === true)
        {
          //set span to say congratulations
          span.textContent = "Congratulations!";
          
          //set reset button to say play again
          resetButton.textContent = "Play again?";
        };
      }
  }
  //clear checks to be reused
  check1 = undefined;
  check2 = undefined;
}

/* Check for winning conditions */

function winCheck()
{
  //check for unflipped squares
  for(var i = 0; i < squares.length; i++)
  {
    if(squares[i].style.transform === "rotateY(0deg)")
    {
      console.log(squares[i].index);
      //end function if unflipped square is found
      return false;
    }
  }
  
  //if all squares have been flipped, the game is won
  return true;
}

/* Reset */

function reset()
{
  //reset checks
  check1 = undefined;
  check2 = undefined;
  i1 = undefined;
  i2 = undefined;
  
  //get colours
  colours = colourConfigure();
  
  //configure new squares
  container.innerHTML = addSquares();
  squares = document.querySelectorAll(".square");
  back = document.querySelectorAll(".back");

  //draw board
  draw();

  //change span text back
  span.textContent = "Memory Game";

  //change reset button text back
  resetButton.textContent = "New Game";
}
