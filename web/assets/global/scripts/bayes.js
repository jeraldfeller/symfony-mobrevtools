// aBayes Functions
var numRows = 2
    ,prior = {a:0.5,b:0.5}
    ,default_POINTS_TO_PLOT = 2000
    ,default_SAMPLES_FOR_COMPARE = 5000;

function doCalcs(data){
    var distros =  setupDistros(data),
        dontChart = false;
    for (var j=0;j<numRows;j++){
        if (distros[j]){
            if (distros[j].dontGraph){
                dontChart = true;
            }
        }
    }
    if (dontChart){
        window.alert("Distribution for one or more versions could not be charted - probably due to difficulties calculating for very high numbers of trials.");
        return false;
    }

    return calcProbs(distros,default_SAMPLES_FOR_COMPARE);
};

function zeroArray(length) {
    var arr = [], i = length;
    while (i--) {
        arr[i] = 0;
    }
    return arr;
}

function calcProbs(distros, numSamples) {
    var x,msg,winnerIndex, winnerValue,
        winCount = zeroArray(numRows),
        numSamples = numSamples||1000;


    for (var i=0;i<numSamples;i++){
        //for each sample, gets jStat to generate a sample and compares to current winner
        winnerValue = 0;
        for (var j=0;j<numRows;j++){
            if (distros[j]){
                x = distros[j].dist.sample();
                if (x>winnerValue){
                    winnerIndex = j;
                    winnerValue = x;
                }
            }
        }
        winCount[winnerIndex]++;
    }


    //put the probablities of being the best, and the credible intervals in the table
    var returnData = [];
    for (i=0;i<numRows;i++){
        if (distros[i]){
            returnData.push(
                Math.round(winCount[i]/(numSamples/100))
            );
        }
    }

    return returnData
};



function setupDistros(data) {
    /*
     * distros is an array of distributions, each having the
     * following properties
     *  dist - the jStat distribtion object
     *  label
     *  numSuccesses - effectively the A parameter
     *  numFailures - effectively the B parameter
     * Additionally, the below are calculated in the setupData function
     *  data - an array of [x,y] arrays for plotting
     *  low95 - the lower edge of the 95% credible interval centred on the mean
     *  high95 - the upper edge of the 95% credible interval centred on the mean
     */
    var distros = [];
    var numTrials, numSuccesses, numFailures, timeWarning;
    var mainForm = document.forms["TestResults"];
    var thisDistro = {};
    for (var i=0;i<numRows;i++){
        thisDistro = {};
        numTrials = parseInt(data[i]['visits']);
        numSuccesses = parseInt(data[i]['conversions']);
        numFailures = numTrials - numSuccesses;
        if (isNaN(numTrials) || isNaN(numSuccesses)) {
            window.alert("All values must be integers.");
            return false;
        }
        if ((numSuccesses > numTrials)) {
            window.alert("You have a row with more successes than trials.");
            return false;
        }

        if (numTrials>=0){
            thisDistro.dist = jStat.beta(numSuccesses+prior.a,numFailures+prior.b);
            thisDistro.numSuccesses = numSuccesses;
            thisDistro.numFailures = numFailures;
            distros[i] = thisDistro;
        }
    };

    return distros;
};
