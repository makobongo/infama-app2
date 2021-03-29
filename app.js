const lengthofFlight = 60;
const movieDuration = [30,30];

function movies(){
    var sum = movieDuration.reduce((a, b) => {
        return a + b;
    }, 0);
    if(sum == lengthofFlight){
        console.log(true)
    } else {
        console.log(false)
    }
    // if(sum<lengthofFlight){
    //     console.log('movie will end in ',(lengthofFlight-sum).toString(),'minutes before the flight ends')
    // } else if(sum>lengthofFlight) {
    //     console.log('movie will end in ',(sum-lengthofFlight).toString(),'minutes after the flight ends')
    // } else {
    //     console.log('perfect timing')
    // }
}
movies()