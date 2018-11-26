hasPermission(RHO,GOAL) :- hasObligation(RHO,GOAL).
violationCondition(AGENT,GOAL,CONDITION):- hasCondition(GOAL,CONDITIONSET),notIsPresent(CONDITION),isSubSet(CONDITION,CONDTIONSET),tryReach(AGENT,GOAL).
violationRelation(AGENT,GOAL,RELATION):- hasRelation(GOAL,RELATIONSET),notIsPresent(RELATION),isSubSet(RELATION,RELATIONSET),tryReach(AGENT,GOAL).
violationEntity(AGENT,GOAL,ENTITY) :- hasEntity(GOAL,ENTITYSET),notIsPresent(ENTITY),isSubSet(ENTITY,ENTITYSUBSET),tryReach(AGENT,GOAL).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationCondition(AGENT,GOAL,CONDITION),hasRisk(CONDITION,RISK,FATALITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- violationRelation(AGENT,GOAL,RISK),hasRisk(CONDITION,RISK,FATALITY).
hasPossibility(OTHERRELATION) :- violationRelation(AGENT,GOAL,RISK),affects(RELATION,OTHERRELATION),notHasPossibility(RELATION).
stopIn(GOAL):-violationEntity(AGENT,GOAL,ENTITY).
consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY) :- hasRelation(GOAL,RELATIONSET),isSubSet(RELATION,RELATIONSET),hasRisk(RELATION,RISK,FATALITY),tryReach(AGENT,GOAL).
stopIn(GOAL) :- consequenceOfBadEvent(GOAL,AGENT,RISK,FATALITY).
isReached(GOAL) :- notStopIn(GOAL,AGENTDONETHIS),isS
