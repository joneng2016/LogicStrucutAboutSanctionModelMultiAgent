function stopped(context)
{
    context.forEach(espObj => {
        if(espObj.stopped)
            true;
        else
            false;
    });
}

function allAgentObliged(context,goal,obligatedToThisGoal)
{
    let whoIsObligated = [];
    context.forEach(espObj => {
        if(espObj.goal.includes(goal))
        {
            if(!espObj.role.includes(obligatedToThisGoal))
                return false;
        }
    });

    return true;
}

function ifNotStopped(context,goal,obligatedToThisGoal)
{ 
    if(stopped(context))
        return false;

    if(!allAgentObliged(context,goal,obligatedToThisGoal))
        return false;
    return true;
}

var context = [
        {
            agent:"agente2",
            goal:"g23",
            stopped:false,
            role:"executor1",
            obligationOfThisRole:["g23"]
        },
        {
            agent:"agente3",
            goal:"g23",
            stopped:false,
            role:"executor1",
            obligationOfThisRole:["g23"]            
        },
        {
            agent:"agente4",
            goal:"g23",
            stopped:false,
            role:"executor2",
            obligationOfThisRole:["g23"]
        },
        {
            agent:"agente5",
            goal:"g23",
            stopped:false,
            role:"executor3",
            obligationOfThisRole:["g23"]
        },
        {
            agent:"agente7",
            goal:"g23",
            stopped:false,
            role:"executor5",
            obligationOfThisRole:[]
        }
    ]
;

var goal = 'g23'; 
if(ifNotStopped(context,goal,['executor1','executor2','executor3']))
    console.log("reached(goal): " + goal + " is true");
else
    console.log("reached(goal): " + goal + " is false");