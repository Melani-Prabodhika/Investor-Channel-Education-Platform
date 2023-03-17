


const questionNumber = document.querySelector(".question-number");
const questionText = document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];

//Push the questions into availableQuestions Array
function setAvailableQuestions(){
    const totalQuestion = quiz.length;
    for (let i = 0; i<totalQuestion; i++) {
        availableQuestions.push(quiz[i])   
    }
}

//Set question number and question and options
function getNewQuestion(){
    //Set question number
    questionNumber.innerHTML = "Question " + (questionCounter + 1) + " of " + quiz.length;

    //Set question text
    //Get random question
    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;
    //Get the position of 'questionIndex' from the availableQuestion Array
    const index1 = availableQuestions.indexOf(questionIndex);
    //Remove the 'questionIndex' from the availableQuestion Array(question does not repeat)
    availableQuestions.splice(index1,1);
    
    //Set options
    //Get the length of options
    const optionLen = currentQuestion.options.length
    //Push options into availableOptions Array
    for (let i = 0; i < optionLen; i++) {
        availableOptions.push(i)
    }

    optionContainer.innerHTML = '';
    let animationDelay = 0.15;
    //create options in html
    for (let i = 0; i < optionLen; i++) {
        //Random option
        const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
        //Get the position of 'optionIndex' from the availableOptions
        const index2 = availableOptions.indexOf(optionIndex);
        //Remove the 'optionIndex' from the availableOptions(option does not repeat)
        availableOptions.splice(index2,1);
        const option = document.createElement("div");
        option.innerHTML = currentQuestion.options[optionIndex];
        option.id = optionIndex;
        option.style.animationDelay = animationDelay + 's';
        animationDelay = animationDelay + 0.2;
        option.className = "option";
        optionContainer.appendChild(option)
        option.setAttribute("onclick","getResult(this)");
    }
    questionCounter++
}

//Get the result of current attempt question
function getResult(element){
    const id = parseInt(element.id);
    //Get the answer by comparing the id of clicked option
    console.log(typeof id)
    if(id === currentQuestion.answer){
        //Set the blue color to the correct option
        element.classList.add("correct");
    }
    else{
        //Set the red color to the wrong option
        element.classList.add("incorrect");
    }
    unclickableOptions();
}

//Make all the options unclickable once the user select a option (RESTRICT THE USER TO CHANGE THE OPTION AGAIN)
function unclickableOptions(){
    const optionLen = optionContainer.children.length;
    for (let i = 0; i < optionLen; i++) {  
        optionContainer.children[i].classList.add("already-answered")  
    }
}

function next(){
    if(questionCounter === quiz.length){
        console.log("quiz over")
    }
    else{
        getNewQuestion();
    }
}

window.onload = function(){
    //Set all questions in availableQuestions Array
    setAvailableQuestions();
    //Call getNewQuestion(); function
    getNewQuestion();
}