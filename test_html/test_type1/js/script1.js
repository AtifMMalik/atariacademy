// Variables
const info_box = document.querySelector(".info_box");



///////// Functions //////////////
function showQuetions(){
    const que_text = document.querySelector(".que_text");
    let index = 0;
    
    //creating a new span and div tag for question and option and passing the value using array index
    let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
    + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
    
    que_text.innerHTML = que_tag; //adding new span tag inside que_tag
    option_list.innerHTML = option_tag; //adding new div tag inside option_tag
    
    const option = option_list.querySelectorAll(".option");
    
    // set onclick attribute to all available options
    for(i=0; i < option.length; i++){
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}

// test function


/////////// Buttons //////////
// onClick of Start Quiz (button)
const start_btn = document.querySelector(".start_btn button");

start_btn.onclick = ()=>{
    info_box.classList.add("activeInfo"); //show info box
}

// onClick of Exit Quiz (button)
const exit_btn = info_box.querySelector(".buttons .quit");

exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
}

// onClick of Continue (button)
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");

continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //hide info box
    quiz_box.classList.add("activeQuiz"); //show quiz box
    
    // queCounter(1); //passing 1 parameter to queCounter
    // startTimer(time_per_question); //calling startTimer function
    // startTimerLine(0); //calling startTimerLine function
}
////////////// Fetching JSON data //////////////////
function clqf(){
    console.log(questions);
}
fetch("/atariacademy/test_html/test_type1/js/questions.json")
.then((response)=>response.json())
.then((questions)=>{
    // console.log(questions);
    // console.log(questions[0].numb);
    showQuetions(); //calling showQestions function 
    clqf();
}).catch((error)=>console.lod("error"));


// onClick of Next (button)
// onClick of Replay Quiz (button)
// onClick of Quit Quiz (button)

//////////// Modules ///////////
// 1. question showing function from json data