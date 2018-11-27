hasPermission(RHO,GOAL) :- hasObligation(RHO,GOAL).
violationCondition(AGENT,GOAL,CONDITION):- hasCondition(GOAL,CONDITIONSET),notIsPresent(CONDITION),isElementOf(CONDITION,CONDTIONSET),tryReach(AGENT,GOAL).
violationRelation(AGENT,GOAL,RELATION):- hasRelation(GOAL,RELATIONSET),notIsPresent(RELATION),isElementOf(RELATION,RELATIONSET),tryReach(AGENT,GOAL).
violationEntity(AGENT,GOAL,ENTITY) :- hasEntity(GOAL,ENTITYSET),notIsPresent(ENTITY),isElementOf(ENTITY,ENTITYSUBSET),tryReach(AGENT,GOAL).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationCondition(AGENT,GOAL,CONDITION),hasRisk(CONDITION,RISK,FATALITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationRelation(AGENT,GOAL,RISK),hasRisk(CONDITION,RISK,FATALITY).
hasPossibility(OTHERRELATION) :- violationRelation(AGENT,GOAL,RISK),affects(RELATION,OTHERRELATION),notHasPossibility(OTHERRELATION).
stopIn(GOAL):-violationEntity(AGENT,GOAL,ENTITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- hasRelation(GOAL,RELATIONSET),isElementOf(RELATION,RELATIONSET),hasRisk(RELATION,RISK,FATALITY),tryReach(AGENT,GOAL).
stopIn(GOAL) :- consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY).
isReached(GOAL) :- notStopIn(GOAL,AGENTDONETHIS),isSubSet(AGENTDONETHIS,AGENTOBLIGATIOTHIS).


hasRelation(goal1,rg1).
isElementOf(relationPlanoCorda,rg1).
tryReach(agent4,goal1).
affects(relationplanoglicerina,relationbastaogarracondutor).
affects(relationplanoglicerina,relationcordaestopo).
affects(relationplanoglicerina,relationchavecatracaparafuso).
affects(relationplanoglicerina,relationparafusoconector).
affects(relationplanoglicerina,relationsoqueteparafuso).
affects(relationplanoglicerina,relationparafusotorre).
affects(relationplanoglicerina,relationagente4corda).
affects(relationplanoglicerina,relationestropocorda).
notIsPresent(relationPlanoCorda).
notHasPossibility(relationbastaogarracondutor).
notHasPossibility(relationcordaestopo).
notHasPossibility(relationchavecatracaparafuso).
notHasPossibility(relationparafusoconector).
notHasPossibility(relationsoqueteparafuso).
notHasPossibility(relationparafusotorre).
notHasPossibility(relationagente4corda).
notHasPossibility(relationestropocorda).
