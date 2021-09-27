<?php

namespace Spatie\Emoji;

use Spatie\Emoji\Exceptions\CouldNotDetermineFlag;
use Spatie\Emoji\Exceptions\UnknownCharacter;

/**
 * Emoji class.
 *
 * @link https://unicode.org/Public/emoji/14.0/emoji-test.txt
 * @version v14.0
 * loaded at: 2021-09-27 16:43:12
 *
 * ##### Emoji group: SMILEYS & EMOTION #####
 * ##### Emoji subgroup: FACE-SMILING #####
 * @method static string grinningFace()
 * @method static string grinningFaceWithBigEyes()
 * @method static string grinningFaceWithSmilingEyes()
 * @method static string beamingFaceWithSmilingEyes()
 * @method static string grinningSquintingFace()
 * @method static string grinningFaceWithSweat()
 * @method static string rollingOnTheFloorLaughing()
 * @method static string faceWithTearsOfJoy()
 * @method static string slightlySmilingFace()
 * @method static string upsideDownFace()
 * @method static string meltingFace()
 * @method static string winkingFace()
 * @method static string smilingFaceWithSmilingEyes()
 * @method static string smilingFaceWithHalo()
 * ##### Emoji subgroup: FACE-AFFECTION #####
 * @method static string smilingFaceWithHearts()
 * @method static string smilingFaceWithHeartEyes()
 * @method static string starStruck()
 * @method static string faceBlowingAKiss()
 * @method static string kissingFace()
 * @method static string smilingFace()
 * @method static string kissingFaceWithClosedEyes()
 * @method static string kissingFaceWithSmilingEyes()
 * @method static string smilingFaceWithTear()
 * ##### Emoji subgroup: FACE-TONGUE #####
 * @method static string faceSavoringFood()
 * @method static string faceWithTongue()
 * @method static string winkingFaceWithTongue()
 * @method static string zanyFace()
 * @method static string squintingFaceWithTongue()
 * @method static string moneyMouthFace()
 * ##### Emoji subgroup: FACE-HAND #####
 * @method static string smilingFaceWithOpenHands()
 * @method static string faceWithHandOverMouth()
 * @method static string faceWithOpenEyesAndHandOverMouth()
 * @method static string faceWithPeekingEye()
 * @method static string shushingFace()
 * @method static string thinkingFace()
 * @method static string salutingFace()
 * ##### Emoji subgroup: FACE-NEUTRAL-SKEPTICAL #####
 * @method static string zipperMouthFace()
 * @method static string faceWithRaisedEyebrow()
 * @method static string neutralFace()
 * @method static string expressionlessFace()
 * @method static string faceWithoutMouth()
 * @method static string dottedLineFace()
 * @method static string faceInClouds()
 * @method static string smirkingFace()
 * @method static string unamusedFace()
 * @method static string faceWithRollingEyes()
 * @method static string grimacingFace()
 * @method static string faceExhaling()
 * @method static string lyingFace()
 * ##### Emoji subgroup: FACE-SLEEPY #####
 * @method static string relievedFace()
 * @method static string pensiveFace()
 * @method static string sleepyFace()
 * @method static string droolingFace()
 * @method static string sleepingFace()
 * ##### Emoji subgroup: FACE-UNWELL #####
 * @method static string faceWithMedicalMask()
 * @method static string faceWithThermometer()
 * @method static string faceWithHeadBandage()
 * @method static string nauseatedFace()
 * @method static string faceVomiting()
 * @method static string sneezingFace()
 * @method static string hotFace()
 * @method static string coldFace()
 * @method static string woozyFace()
 * @method static string faceWithCrossedOutEyes()
 * @method static string faceWithSpiralEyes()
 * @method static string explodingHead()
 * ##### Emoji subgroup: FACE-HAT #####
 * @method static string cowboyHatFace()
 * @method static string partyingFace()
 * @method static string disguisedFace()
 * ##### Emoji subgroup: FACE-GLASSES #####
 * @method static string smilingFaceWithSunglasses()
 * @method static string nerdFace()
 * @method static string faceWithMonocle()
 * ##### Emoji subgroup: FACE-CONCERNED #####
 * @method static string confusedFace()
 * @method static string faceWithDiagonalMouth()
 * @method static string worriedFace()
 * @method static string slightlyFrowningFace()
 * @method static string frowningFace()
 * @method static string faceWithOpenMouth()
 * @method static string hushedFace()
 * @method static string astonishedFace()
 * @method static string flushedFace()
 * @method static string pleadingFace()
 * @method static string faceHoldingBackTears()
 * @method static string frowningFaceWithOpenMouth()
 * @method static string anguishedFace()
 * @method static string fearfulFace()
 * @method static string anxiousFaceWithSweat()
 * @method static string sadButRelievedFace()
 * @method static string cryingFace()
 * @method static string loudlyCryingFace()
 * @method static string faceScreamingInFear()
 * @method static string confoundedFace()
 * @method static string perseveringFace()
 * @method static string disappointedFace()
 * @method static string downcastFaceWithSweat()
 * @method static string wearyFace()
 * @method static string tiredFace()
 * @method static string yawningFace()
 * ##### Emoji subgroup: FACE-NEGATIVE #####
 * @method static string faceWithSteamFromNose()
 * @method static string poutingFace()
 * @method static string angryFace()
 * @method static string faceWithSymbolsOnMouth()
 * @method static string smilingFaceWithHorns()
 * @method static string angryFaceWithHorns()
 * @method static string skull()
 * @method static string skullAndCrossbones()
 * ##### Emoji subgroup: FACE-COSTUME #####
 * @method static string pileOfPoo()
 * @method static string clownFace()
 * @method static string ogre()
 * @method static string goblin()
 * @method static string ghost()
 * @method static string alien()
 * @method static string alienMonster()
 * @method static string robot()
 * ##### Emoji subgroup: CAT-FACE #####
 * @method static string grinningCat()
 * @method static string grinningCatWithSmilingEyes()
 * @method static string catWithTearsOfJoy()
 * @method static string smilingCatWithHeartEyes()
 * @method static string catWithWrySmile()
 * @method static string kissingCat()
 * @method static string wearyCat()
 * @method static string cryingCat()
 * @method static string poutingCat()
 * ##### Emoji subgroup: MONKEY-FACE #####
 * @method static string seeNoEvilMonkey()
 * @method static string hearNoEvilMonkey()
 * @method static string speakNoEvilMonkey()
 * ##### Emoji subgroup: EMOTION #####
 * @method static string kissMark()
 * @method static string loveLetter()
 * @method static string heartWithArrow()
 * @method static string heartWithRibbon()
 * @method static string sparklingHeart()
 * @method static string growingHeart()
 * @method static string beatingHeart()
 * @method static string revolvingHearts()
 * @method static string twoHearts()
 * @method static string heartDecoration()
 * @method static string heartExclamation()
 * @method static string brokenHeart()
 * @method static string heartOnFire()
 * @method static string mendingHeart()
 * @method static string redHeart()
 * @method static string orangeHeart()
 * @method static string yellowHeart()
 * @method static string greenHeart()
 * @method static string blueHeart()
 * @method static string purpleHeart()
 * @method static string brownHeart()
 * @method static string blackHeart()
 * @method static string whiteHeart()
 * @method static string hundredPoints()
 * @method static string angerSymbol()
 * @method static string collision()
 * @method static string dizzy()
 * @method static string sweatDroplets()
 * @method static string dashingAway()
 * @method static string hole()
 * @method static string bomb()
 * @method static string speechBalloon()
 * @method static string eyeInSpeechBubble()
 * @method static string leftSpeechBubble()
 * @method static string rightAngerBubble()
 * @method static string thoughtBalloon()
 * @method static string zzz()
 * ##### Emoji group: PEOPLE & BODY #####
 * ##### Emoji subgroup: HAND-FINGERS-OPEN #####
 * @method static string wavingHand()
 * @method static string wavingHandLightSkinTone()
 * @method static string wavingHandMediumLightSkinTone()
 * @method static string wavingHandMediumSkinTone()
 * @method static string wavingHandMediumDarkSkinTone()
 * @method static string wavingHandDarkSkinTone()
 * @method static string raisedBackOfHand()
 * @method static string raisedBackOfHandLightSkinTone()
 * @method static string raisedBackOfHandMediumLightSkinTone()
 * @method static string raisedBackOfHandMediumSkinTone()
 * @method static string raisedBackOfHandMediumDarkSkinTone()
 * @method static string raisedBackOfHandDarkSkinTone()
 * @method static string handWithFingersSplayed()
 * @method static string handWithFingersSplayedLightSkinTone()
 * @method static string handWithFingersSplayedMediumLightSkinTone()
 * @method static string handWithFingersSplayedMediumSkinTone()
 * @method static string handWithFingersSplayedMediumDarkSkinTone()
 * @method static string handWithFingersSplayedDarkSkinTone()
 * @method static string raisedHand()
 * @method static string raisedHandLightSkinTone()
 * @method static string raisedHandMediumLightSkinTone()
 * @method static string raisedHandMediumSkinTone()
 * @method static string raisedHandMediumDarkSkinTone()
 * @method static string raisedHandDarkSkinTone()
 * @method static string vulcanSalute()
 * @method static string vulcanSaluteLightSkinTone()
 * @method static string vulcanSaluteMediumLightSkinTone()
 * @method static string vulcanSaluteMediumSkinTone()
 * @method static string vulcanSaluteMediumDarkSkinTone()
 * @method static string vulcanSaluteDarkSkinTone()
 * @method static string rightwardsHand()
 * @method static string rightwardsHandLightSkinTone()
 * @method static string rightwardsHandMediumLightSkinTone()
 * @method static string rightwardsHandMediumSkinTone()
 * @method static string rightwardsHandMediumDarkSkinTone()
 * @method static string rightwardsHandDarkSkinTone()
 * @method static string leftwardsHand()
 * @method static string leftwardsHandLightSkinTone()
 * @method static string leftwardsHandMediumLightSkinTone()
 * @method static string leftwardsHandMediumSkinTone()
 * @method static string leftwardsHandMediumDarkSkinTone()
 * @method static string leftwardsHandDarkSkinTone()
 * @method static string palmDownHand()
 * @method static string palmDownHandLightSkinTone()
 * @method static string palmDownHandMediumLightSkinTone()
 * @method static string palmDownHandMediumSkinTone()
 * @method static string palmDownHandMediumDarkSkinTone()
 * @method static string palmDownHandDarkSkinTone()
 * @method static string palmUpHand()
 * @method static string palmUpHandLightSkinTone()
 * @method static string palmUpHandMediumLightSkinTone()
 * @method static string palmUpHandMediumSkinTone()
 * @method static string palmUpHandMediumDarkSkinTone()
 * @method static string palmUpHandDarkSkinTone()
 * ##### Emoji subgroup: HAND-FINGERS-PARTIAL #####
 * @method static string okHand()
 * @method static string okHandLightSkinTone()
 * @method static string okHandMediumLightSkinTone()
 * @method static string okHandMediumSkinTone()
 * @method static string okHandMediumDarkSkinTone()
 * @method static string okHandDarkSkinTone()
 * @method static string pinchedFingers()
 * @method static string pinchedFingersLightSkinTone()
 * @method static string pinchedFingersMediumLightSkinTone()
 * @method static string pinchedFingersMediumSkinTone()
 * @method static string pinchedFingersMediumDarkSkinTone()
 * @method static string pinchedFingersDarkSkinTone()
 * @method static string pinchingHand()
 * @method static string pinchingHandLightSkinTone()
 * @method static string pinchingHandMediumLightSkinTone()
 * @method static string pinchingHandMediumSkinTone()
 * @method static string pinchingHandMediumDarkSkinTone()
 * @method static string pinchingHandDarkSkinTone()
 * @method static string victoryHand()
 * @method static string victoryHandLightSkinTone()
 * @method static string victoryHandMediumLightSkinTone()
 * @method static string victoryHandMediumSkinTone()
 * @method static string victoryHandMediumDarkSkinTone()
 * @method static string victoryHandDarkSkinTone()
 * @method static string crossedFingers()
 * @method static string crossedFingersLightSkinTone()
 * @method static string crossedFingersMediumLightSkinTone()
 * @method static string crossedFingersMediumSkinTone()
 * @method static string crossedFingersMediumDarkSkinTone()
 * @method static string crossedFingersDarkSkinTone()
 * @method static string handWithIndexFingerAndThumbCrossed()
 * @method static string handWithIndexFingerAndThumbCrossedLightSkinTone()
 * @method static string handWithIndexFingerAndThumbCrossedMediumLightSkinTone()
 * @method static string handWithIndexFingerAndThumbCrossedMediumSkinTone()
 * @method static string handWithIndexFingerAndThumbCrossedMediumDarkSkinTone()
 * @method static string handWithIndexFingerAndThumbCrossedDarkSkinTone()
 * @method static string loveYouGesture()
 * @method static string loveYouGestureLightSkinTone()
 * @method static string loveYouGestureMediumLightSkinTone()
 * @method static string loveYouGestureMediumSkinTone()
 * @method static string loveYouGestureMediumDarkSkinTone()
 * @method static string loveYouGestureDarkSkinTone()
 * @method static string signOfTheHorns()
 * @method static string signOfTheHornsLightSkinTone()
 * @method static string signOfTheHornsMediumLightSkinTone()
 * @method static string signOfTheHornsMediumSkinTone()
 * @method static string signOfTheHornsMediumDarkSkinTone()
 * @method static string signOfTheHornsDarkSkinTone()
 * @method static string callMeHand()
 * @method static string callMeHandLightSkinTone()
 * @method static string callMeHandMediumLightSkinTone()
 * @method static string callMeHandMediumSkinTone()
 * @method static string callMeHandMediumDarkSkinTone()
 * @method static string callMeHandDarkSkinTone()
 * ##### Emoji subgroup: HAND-SINGLE-FINGER #####
 * @method static string backhandIndexPointingLeft()
 * @method static string backhandIndexPointingLeftLightSkinTone()
 * @method static string backhandIndexPointingLeftMediumLightSkinTone()
 * @method static string backhandIndexPointingLeftMediumSkinTone()
 * @method static string backhandIndexPointingLeftMediumDarkSkinTone()
 * @method static string backhandIndexPointingLeftDarkSkinTone()
 * @method static string backhandIndexPointingRight()
 * @method static string backhandIndexPointingRightLightSkinTone()
 * @method static string backhandIndexPointingRightMediumLightSkinTone()
 * @method static string backhandIndexPointingRightMediumSkinTone()
 * @method static string backhandIndexPointingRightMediumDarkSkinTone()
 * @method static string backhandIndexPointingRightDarkSkinTone()
 * @method static string backhandIndexPointingUp()
 * @method static string backhandIndexPointingUpLightSkinTone()
 * @method static string backhandIndexPointingUpMediumLightSkinTone()
 * @method static string backhandIndexPointingUpMediumSkinTone()
 * @method static string backhandIndexPointingUpMediumDarkSkinTone()
 * @method static string backhandIndexPointingUpDarkSkinTone()
 * @method static string middleFinger()
 * @method static string middleFingerLightSkinTone()
 * @method static string middleFingerMediumLightSkinTone()
 * @method static string middleFingerMediumSkinTone()
 * @method static string middleFingerMediumDarkSkinTone()
 * @method static string middleFingerDarkSkinTone()
 * @method static string backhandIndexPointingDown()
 * @method static string backhandIndexPointingDownLightSkinTone()
 * @method static string backhandIndexPointingDownMediumLightSkinTone()
 * @method static string backhandIndexPointingDownMediumSkinTone()
 * @method static string backhandIndexPointingDownMediumDarkSkinTone()
 * @method static string backhandIndexPointingDownDarkSkinTone()
 * @method static string indexPointingUp()
 * @method static string indexPointingUpLightSkinTone()
 * @method static string indexPointingUpMediumLightSkinTone()
 * @method static string indexPointingUpMediumSkinTone()
 * @method static string indexPointingUpMediumDarkSkinTone()
 * @method static string indexPointingUpDarkSkinTone()
 * @method static string indexPointingAtTheViewer()
 * @method static string indexPointingAtTheViewerLightSkinTone()
 * @method static string indexPointingAtTheViewerMediumLightSkinTone()
 * @method static string indexPointingAtTheViewerMediumSkinTone()
 * @method static string indexPointingAtTheViewerMediumDarkSkinTone()
 * @method static string indexPointingAtTheViewerDarkSkinTone()
 * ##### Emoji subgroup: HAND-FINGERS-CLOSED #####
 * @method static string thumbsUp()
 * @method static string thumbsUpLightSkinTone()
 * @method static string thumbsUpMediumLightSkinTone()
 * @method static string thumbsUpMediumSkinTone()
 * @method static string thumbsUpMediumDarkSkinTone()
 * @method static string thumbsUpDarkSkinTone()
 * @method static string thumbsDown()
 * @method static string thumbsDownLightSkinTone()
 * @method static string thumbsDownMediumLightSkinTone()
 * @method static string thumbsDownMediumSkinTone()
 * @method static string thumbsDownMediumDarkSkinTone()
 * @method static string thumbsDownDarkSkinTone()
 * @method static string raisedFist()
 * @method static string raisedFistLightSkinTone()
 * @method static string raisedFistMediumLightSkinTone()
 * @method static string raisedFistMediumSkinTone()
 * @method static string raisedFistMediumDarkSkinTone()
 * @method static string raisedFistDarkSkinTone()
 * @method static string oncomingFist()
 * @method static string oncomingFistLightSkinTone()
 * @method static string oncomingFistMediumLightSkinTone()
 * @method static string oncomingFistMediumSkinTone()
 * @method static string oncomingFistMediumDarkSkinTone()
 * @method static string oncomingFistDarkSkinTone()
 * @method static string leftFacingFist()
 * @method static string leftFacingFistLightSkinTone()
 * @method static string leftFacingFistMediumLightSkinTone()
 * @method static string leftFacingFistMediumSkinTone()
 * @method static string leftFacingFistMediumDarkSkinTone()
 * @method static string leftFacingFistDarkSkinTone()
 * @method static string rightFacingFist()
 * @method static string rightFacingFistLightSkinTone()
 * @method static string rightFacingFistMediumLightSkinTone()
 * @method static string rightFacingFistMediumSkinTone()
 * @method static string rightFacingFistMediumDarkSkinTone()
 * @method static string rightFacingFistDarkSkinTone()
 * ##### Emoji subgroup: HANDS #####
 * @method static string clappingHands()
 * @method static string clappingHandsLightSkinTone()
 * @method static string clappingHandsMediumLightSkinTone()
 * @method static string clappingHandsMediumSkinTone()
 * @method static string clappingHandsMediumDarkSkinTone()
 * @method static string clappingHandsDarkSkinTone()
 * @method static string raisingHands()
 * @method static string raisingHandsLightSkinTone()
 * @method static string raisingHandsMediumLightSkinTone()
 * @method static string raisingHandsMediumSkinTone()
 * @method static string raisingHandsMediumDarkSkinTone()
 * @method static string raisingHandsDarkSkinTone()
 * @method static string heartHands()
 * @method static string heartHandsLightSkinTone()
 * @method static string heartHandsMediumLightSkinTone()
 * @method static string heartHandsMediumSkinTone()
 * @method static string heartHandsMediumDarkSkinTone()
 * @method static string heartHandsDarkSkinTone()
 * @method static string openHands()
 * @method static string openHandsLightSkinTone()
 * @method static string openHandsMediumLightSkinTone()
 * @method static string openHandsMediumSkinTone()
 * @method static string openHandsMediumDarkSkinTone()
 * @method static string openHandsDarkSkinTone()
 * @method static string palmsUpTogether()
 * @method static string palmsUpTogetherLightSkinTone()
 * @method static string palmsUpTogetherMediumLightSkinTone()
 * @method static string palmsUpTogetherMediumSkinTone()
 * @method static string palmsUpTogetherMediumDarkSkinTone()
 * @method static string palmsUpTogetherDarkSkinTone()
 * @method static string handshake()
 * @method static string handshakeLightSkinTone()
 * @method static string handshakeMediumLightSkinTone()
 * @method static string handshakeMediumSkinTone()
 * @method static string handshakeMediumDarkSkinTone()
 * @method static string handshakeDarkSkinTone()
 * @method static string handshakeLightSkinToneMediumLightSkinTone()
 * @method static string handshakeLightSkinToneMediumSkinTone()
 * @method static string handshakeLightSkinToneMediumDarkSkinTone()
 * @method static string handshakeLightSkinToneDarkSkinTone()
 * @method static string handshakeMediumLightSkinToneLightSkinTone()
 * @method static string handshakeMediumLightSkinToneMediumSkinTone()
 * @method static string handshakeMediumLightSkinToneMediumDarkSkinTone()
 * @method static string handshakeMediumLightSkinToneDarkSkinTone()
 * @method static string handshakeMediumSkinToneLightSkinTone()
 * @method static string handshakeMediumSkinToneMediumLightSkinTone()
 * @method static string handshakeMediumSkinToneMediumDarkSkinTone()
 * @method static string handshakeMediumSkinToneDarkSkinTone()
 * @method static string handshakeMediumDarkSkinToneLightSkinTone()
 * @method static string handshakeMediumDarkSkinToneMediumLightSkinTone()
 * @method static string handshakeMediumDarkSkinToneMediumSkinTone()
 * @method static string handshakeMediumDarkSkinToneDarkSkinTone()
 * @method static string handshakeDarkSkinToneLightSkinTone()
 * @method static string handshakeDarkSkinToneMediumLightSkinTone()
 * @method static string handshakeDarkSkinToneMediumSkinTone()
 * @method static string handshakeDarkSkinToneMediumDarkSkinTone()
 * @method static string foldedHands()
 * @method static string foldedHandsLightSkinTone()
 * @method static string foldedHandsMediumLightSkinTone()
 * @method static string foldedHandsMediumSkinTone()
 * @method static string foldedHandsMediumDarkSkinTone()
 * @method static string foldedHandsDarkSkinTone()
 * ##### Emoji subgroup: HAND-PROP #####
 * @method static string writingHand()
 * @method static string writingHandLightSkinTone()
 * @method static string writingHandMediumLightSkinTone()
 * @method static string writingHandMediumSkinTone()
 * @method static string writingHandMediumDarkSkinTone()
 * @method static string writingHandDarkSkinTone()
 * @method static string nailPolish()
 * @method static string nailPolishLightSkinTone()
 * @method static string nailPolishMediumLightSkinTone()
 * @method static string nailPolishMediumSkinTone()
 * @method static string nailPolishMediumDarkSkinTone()
 * @method static string nailPolishDarkSkinTone()
 * @method static string selfie()
 * @method static string selfieLightSkinTone()
 * @method static string selfieMediumLightSkinTone()
 * @method static string selfieMediumSkinTone()
 * @method static string selfieMediumDarkSkinTone()
 * @method static string selfieDarkSkinTone()
 * ##### Emoji subgroup: BODY-PARTS #####
 * @method static string flexedBiceps()
 * @method static string flexedBicepsLightSkinTone()
 * @method static string flexedBicepsMediumLightSkinTone()
 * @method static string flexedBicepsMediumSkinTone()
 * @method static string flexedBicepsMediumDarkSkinTone()
 * @method static string flexedBicepsDarkSkinTone()
 * @method static string mechanicalArm()
 * @method static string mechanicalLeg()
 * @method static string leg()
 * @method static string legLightSkinTone()
 * @method static string legMediumLightSkinTone()
 * @method static string legMediumSkinTone()
 * @method static string legMediumDarkSkinTone()
 * @method static string legDarkSkinTone()
 * @method static string foot()
 * @method static string footLightSkinTone()
 * @method static string footMediumLightSkinTone()
 * @method static string footMediumSkinTone()
 * @method static string footMediumDarkSkinTone()
 * @method static string footDarkSkinTone()
 * @method static string ear()
 * @method static string earLightSkinTone()
 * @method static string earMediumLightSkinTone()
 * @method static string earMediumSkinTone()
 * @method static string earMediumDarkSkinTone()
 * @method static string earDarkSkinTone()
 * @method static string earWithHearingAid()
 * @method static string earWithHearingAidLightSkinTone()
 * @method static string earWithHearingAidMediumLightSkinTone()
 * @method static string earWithHearingAidMediumSkinTone()
 * @method static string earWithHearingAidMediumDarkSkinTone()
 * @method static string earWithHearingAidDarkSkinTone()
 * @method static string nose()
 * @method static string noseLightSkinTone()
 * @method static string noseMediumLightSkinTone()
 * @method static string noseMediumSkinTone()
 * @method static string noseMediumDarkSkinTone()
 * @method static string noseDarkSkinTone()
 * @method static string brain()
 * @method static string anatomicalHeart()
 * @method static string lungs()
 * @method static string tooth()
 * @method static string bone()
 * @method static string eyes()
 * @method static string eye()
 * @method static string tongue()
 * @method static string mouth()
 * @method static string bitingLip()
 * ##### Emoji subgroup: PERSON #####
 * @method static string baby()
 * @method static string babyLightSkinTone()
 * @method static string babyMediumLightSkinTone()
 * @method static string babyMediumSkinTone()
 * @method static string babyMediumDarkSkinTone()
 * @method static string babyDarkSkinTone()
 * @method static string child()
 * @method static string childLightSkinTone()
 * @method static string childMediumLightSkinTone()
 * @method static string childMediumSkinTone()
 * @method static string childMediumDarkSkinTone()
 * @method static string childDarkSkinTone()
 * @method static string boy()
 * @method static string boyLightSkinTone()
 * @method static string boyMediumLightSkinTone()
 * @method static string boyMediumSkinTone()
 * @method static string boyMediumDarkSkinTone()
 * @method static string boyDarkSkinTone()
 * @method static string girl()
 * @method static string girlLightSkinTone()
 * @method static string girlMediumLightSkinTone()
 * @method static string girlMediumSkinTone()
 * @method static string girlMediumDarkSkinTone()
 * @method static string girlDarkSkinTone()
 * @method static string person()
 * @method static string personLightSkinTone()
 * @method static string personMediumLightSkinTone()
 * @method static string personMediumSkinTone()
 * @method static string personMediumDarkSkinTone()
 * @method static string personDarkSkinTone()
 * @method static string personBlondHair()
 * @method static string personLightSkinToneBlondHair()
 * @method static string personMediumLightSkinToneBlondHair()
 * @method static string personMediumSkinToneBlondHair()
 * @method static string personMediumDarkSkinToneBlondHair()
 * @method static string personDarkSkinToneBlondHair()
 * @method static string man()
 * @method static string manLightSkinTone()
 * @method static string manMediumLightSkinTone()
 * @method static string manMediumSkinTone()
 * @method static string manMediumDarkSkinTone()
 * @method static string manDarkSkinTone()
 * @method static string personBeard()
 * @method static string personLightSkinToneBeard()
 * @method static string personMediumLightSkinToneBeard()
 * @method static string personMediumSkinToneBeard()
 * @method static string personMediumDarkSkinToneBeard()
 * @method static string personDarkSkinToneBeard()
 * @method static string manBeard()
 * @method static string manLightSkinToneBeard()
 * @method static string manMediumLightSkinToneBeard()
 * @method static string manMediumSkinToneBeard()
 * @method static string manMediumDarkSkinToneBeard()
 * @method static string manDarkSkinToneBeard()
 * @method static string womanBeard()
 * @method static string womanLightSkinToneBeard()
 * @method static string womanMediumLightSkinToneBeard()
 * @method static string womanMediumSkinToneBeard()
 * @method static string womanMediumDarkSkinToneBeard()
 * @method static string womanDarkSkinToneBeard()
 * @method static string manRedHair()
 * @method static string manLightSkinToneRedHair()
 * @method static string manMediumLightSkinToneRedHair()
 * @method static string manMediumSkinToneRedHair()
 * @method static string manMediumDarkSkinToneRedHair()
 * @method static string manDarkSkinToneRedHair()
 * @method static string manCurlyHair()
 * @method static string manLightSkinToneCurlyHair()
 * @method static string manMediumLightSkinToneCurlyHair()
 * @method static string manMediumSkinToneCurlyHair()
 * @method static string manMediumDarkSkinToneCurlyHair()
 * @method static string manDarkSkinToneCurlyHair()
 * @method static string manWhiteHair()
 * @method static string manLightSkinToneWhiteHair()
 * @method static string manMediumLightSkinToneWhiteHair()
 * @method static string manMediumSkinToneWhiteHair()
 * @method static string manMediumDarkSkinToneWhiteHair()
 * @method static string manDarkSkinToneWhiteHair()
 * @method static string manBald()
 * @method static string manLightSkinToneBald()
 * @method static string manMediumLightSkinToneBald()
 * @method static string manMediumSkinToneBald()
 * @method static string manMediumDarkSkinToneBald()
 * @method static string manDarkSkinToneBald()
 * @method static string woman()
 * @method static string womanLightSkinTone()
 * @method static string womanMediumLightSkinTone()
 * @method static string womanMediumSkinTone()
 * @method static string womanMediumDarkSkinTone()
 * @method static string womanDarkSkinTone()
 * @method static string womanRedHair()
 * @method static string womanLightSkinToneRedHair()
 * @method static string womanMediumLightSkinToneRedHair()
 * @method static string womanMediumSkinToneRedHair()
 * @method static string womanMediumDarkSkinToneRedHair()
 * @method static string womanDarkSkinToneRedHair()
 * @method static string personRedHair()
 * @method static string personLightSkinToneRedHair()
 * @method static string personMediumLightSkinToneRedHair()
 * @method static string personMediumSkinToneRedHair()
 * @method static string personMediumDarkSkinToneRedHair()
 * @method static string personDarkSkinToneRedHair()
 * @method static string womanCurlyHair()
 * @method static string womanLightSkinToneCurlyHair()
 * @method static string womanMediumLightSkinToneCurlyHair()
 * @method static string womanMediumSkinToneCurlyHair()
 * @method static string womanMediumDarkSkinToneCurlyHair()
 * @method static string womanDarkSkinToneCurlyHair()
 * @method static string personCurlyHair()
 * @method static string personLightSkinToneCurlyHair()
 * @method static string personMediumLightSkinToneCurlyHair()
 * @method static string personMediumSkinToneCurlyHair()
 * @method static string personMediumDarkSkinToneCurlyHair()
 * @method static string personDarkSkinToneCurlyHair()
 * @method static string womanWhiteHair()
 * @method static string womanLightSkinToneWhiteHair()
 * @method static string womanMediumLightSkinToneWhiteHair()
 * @method static string womanMediumSkinToneWhiteHair()
 * @method static string womanMediumDarkSkinToneWhiteHair()
 * @method static string womanDarkSkinToneWhiteHair()
 * @method static string personWhiteHair()
 * @method static string personLightSkinToneWhiteHair()
 * @method static string personMediumLightSkinToneWhiteHair()
 * @method static string personMediumSkinToneWhiteHair()
 * @method static string personMediumDarkSkinToneWhiteHair()
 * @method static string personDarkSkinToneWhiteHair()
 * @method static string womanBald()
 * @method static string womanLightSkinToneBald()
 * @method static string womanMediumLightSkinToneBald()
 * @method static string womanMediumSkinToneBald()
 * @method static string womanMediumDarkSkinToneBald()
 * @method static string womanDarkSkinToneBald()
 * @method static string personBald()
 * @method static string personLightSkinToneBald()
 * @method static string personMediumLightSkinToneBald()
 * @method static string personMediumSkinToneBald()
 * @method static string personMediumDarkSkinToneBald()
 * @method static string personDarkSkinToneBald()
 * @method static string womanBlondHair()
 * @method static string womanLightSkinToneBlondHair()
 * @method static string womanMediumLightSkinToneBlondHair()
 * @method static string womanMediumSkinToneBlondHair()
 * @method static string womanMediumDarkSkinToneBlondHair()
 * @method static string womanDarkSkinToneBlondHair()
 * @method static string manBlondHair()
 * @method static string manLightSkinToneBlondHair()
 * @method static string manMediumLightSkinToneBlondHair()
 * @method static string manMediumSkinToneBlondHair()
 * @method static string manMediumDarkSkinToneBlondHair()
 * @method static string manDarkSkinToneBlondHair()
 * @method static string olderPerson()
 * @method static string olderPersonLightSkinTone()
 * @method static string olderPersonMediumLightSkinTone()
 * @method static string olderPersonMediumSkinTone()
 * @method static string olderPersonMediumDarkSkinTone()
 * @method static string olderPersonDarkSkinTone()
 * @method static string oldMan()
 * @method static string oldManLightSkinTone()
 * @method static string oldManMediumLightSkinTone()
 * @method static string oldManMediumSkinTone()
 * @method static string oldManMediumDarkSkinTone()
 * @method static string oldManDarkSkinTone()
 * @method static string oldWoman()
 * @method static string oldWomanLightSkinTone()
 * @method static string oldWomanMediumLightSkinTone()
 * @method static string oldWomanMediumSkinTone()
 * @method static string oldWomanMediumDarkSkinTone()
 * @method static string oldWomanDarkSkinTone()
 * ##### Emoji subgroup: PERSON-GESTURE #####
 * @method static string personFrowning()
 * @method static string personFrowningLightSkinTone()
 * @method static string personFrowningMediumLightSkinTone()
 * @method static string personFrowningMediumSkinTone()
 * @method static string personFrowningMediumDarkSkinTone()
 * @method static string personFrowningDarkSkinTone()
 * @method static string manFrowning()
 * @method static string manFrowningLightSkinTone()
 * @method static string manFrowningMediumLightSkinTone()
 * @method static string manFrowningMediumSkinTone()
 * @method static string manFrowningMediumDarkSkinTone()
 * @method static string manFrowningDarkSkinTone()
 * @method static string womanFrowning()
 * @method static string womanFrowningLightSkinTone()
 * @method static string womanFrowningMediumLightSkinTone()
 * @method static string womanFrowningMediumSkinTone()
 * @method static string womanFrowningMediumDarkSkinTone()
 * @method static string womanFrowningDarkSkinTone()
 * @method static string personPouting()
 * @method static string personPoutingLightSkinTone()
 * @method static string personPoutingMediumLightSkinTone()
 * @method static string personPoutingMediumSkinTone()
 * @method static string personPoutingMediumDarkSkinTone()
 * @method static string personPoutingDarkSkinTone()
 * @method static string manPouting()
 * @method static string manPoutingLightSkinTone()
 * @method static string manPoutingMediumLightSkinTone()
 * @method static string manPoutingMediumSkinTone()
 * @method static string manPoutingMediumDarkSkinTone()
 * @method static string manPoutingDarkSkinTone()
 * @method static string womanPouting()
 * @method static string womanPoutingLightSkinTone()
 * @method static string womanPoutingMediumLightSkinTone()
 * @method static string womanPoutingMediumSkinTone()
 * @method static string womanPoutingMediumDarkSkinTone()
 * @method static string womanPoutingDarkSkinTone()
 * @method static string personGesturingNo()
 * @method static string personGesturingNoLightSkinTone()
 * @method static string personGesturingNoMediumLightSkinTone()
 * @method static string personGesturingNoMediumSkinTone()
 * @method static string personGesturingNoMediumDarkSkinTone()
 * @method static string personGesturingNoDarkSkinTone()
 * @method static string manGesturingNo()
 * @method static string manGesturingNoLightSkinTone()
 * @method static string manGesturingNoMediumLightSkinTone()
 * @method static string manGesturingNoMediumSkinTone()
 * @method static string manGesturingNoMediumDarkSkinTone()
 * @method static string manGesturingNoDarkSkinTone()
 * @method static string womanGesturingNo()
 * @method static string womanGesturingNoLightSkinTone()
 * @method static string womanGesturingNoMediumLightSkinTone()
 * @method static string womanGesturingNoMediumSkinTone()
 * @method static string womanGesturingNoMediumDarkSkinTone()
 * @method static string womanGesturingNoDarkSkinTone()
 * @method static string personGesturingOk()
 * @method static string personGesturingOkLightSkinTone()
 * @method static string personGesturingOkMediumLightSkinTone()
 * @method static string personGesturingOkMediumSkinTone()
 * @method static string personGesturingOkMediumDarkSkinTone()
 * @method static string personGesturingOkDarkSkinTone()
 * @method static string manGesturingOk()
 * @method static string manGesturingOkLightSkinTone()
 * @method static string manGesturingOkMediumLightSkinTone()
 * @method static string manGesturingOkMediumSkinTone()
 * @method static string manGesturingOkMediumDarkSkinTone()
 * @method static string manGesturingOkDarkSkinTone()
 * @method static string womanGesturingOk()
 * @method static string womanGesturingOkLightSkinTone()
 * @method static string womanGesturingOkMediumLightSkinTone()
 * @method static string womanGesturingOkMediumSkinTone()
 * @method static string womanGesturingOkMediumDarkSkinTone()
 * @method static string womanGesturingOkDarkSkinTone()
 * @method static string personTippingHand()
 * @method static string personTippingHandLightSkinTone()
 * @method static string personTippingHandMediumLightSkinTone()
 * @method static string personTippingHandMediumSkinTone()
 * @method static string personTippingHandMediumDarkSkinTone()
 * @method static string personTippingHandDarkSkinTone()
 * @method static string manTippingHand()
 * @method static string manTippingHandLightSkinTone()
 * @method static string manTippingHandMediumLightSkinTone()
 * @method static string manTippingHandMediumSkinTone()
 * @method static string manTippingHandMediumDarkSkinTone()
 * @method static string manTippingHandDarkSkinTone()
 * @method static string womanTippingHand()
 * @method static string womanTippingHandLightSkinTone()
 * @method static string womanTippingHandMediumLightSkinTone()
 * @method static string womanTippingHandMediumSkinTone()
 * @method static string womanTippingHandMediumDarkSkinTone()
 * @method static string womanTippingHandDarkSkinTone()
 * @method static string personRaisingHand()
 * @method static string personRaisingHandLightSkinTone()
 * @method static string personRaisingHandMediumLightSkinTone()
 * @method static string personRaisingHandMediumSkinTone()
 * @method static string personRaisingHandMediumDarkSkinTone()
 * @method static string personRaisingHandDarkSkinTone()
 * @method static string manRaisingHand()
 * @method static string manRaisingHandLightSkinTone()
 * @method static string manRaisingHandMediumLightSkinTone()
 * @method static string manRaisingHandMediumSkinTone()
 * @method static string manRaisingHandMediumDarkSkinTone()
 * @method static string manRaisingHandDarkSkinTone()
 * @method static string womanRaisingHand()
 * @method static string womanRaisingHandLightSkinTone()
 * @method static string womanRaisingHandMediumLightSkinTone()
 * @method static string womanRaisingHandMediumSkinTone()
 * @method static string womanRaisingHandMediumDarkSkinTone()
 * @method static string womanRaisingHandDarkSkinTone()
 * @method static string deafPerson()
 * @method static string deafPersonLightSkinTone()
 * @method static string deafPersonMediumLightSkinTone()
 * @method static string deafPersonMediumSkinTone()
 * @method static string deafPersonMediumDarkSkinTone()
 * @method static string deafPersonDarkSkinTone()
 * @method static string deafMan()
 * @method static string deafManLightSkinTone()
 * @method static string deafManMediumLightSkinTone()
 * @method static string deafManMediumSkinTone()
 * @method static string deafManMediumDarkSkinTone()
 * @method static string deafManDarkSkinTone()
 * @method static string deafWoman()
 * @method static string deafWomanLightSkinTone()
 * @method static string deafWomanMediumLightSkinTone()
 * @method static string deafWomanMediumSkinTone()
 * @method static string deafWomanMediumDarkSkinTone()
 * @method static string deafWomanDarkSkinTone()
 * @method static string personBowing()
 * @method static string personBowingLightSkinTone()
 * @method static string personBowingMediumLightSkinTone()
 * @method static string personBowingMediumSkinTone()
 * @method static string personBowingMediumDarkSkinTone()
 * @method static string personBowingDarkSkinTone()
 * @method static string manBowing()
 * @method static string manBowingLightSkinTone()
 * @method static string manBowingMediumLightSkinTone()
 * @method static string manBowingMediumSkinTone()
 * @method static string manBowingMediumDarkSkinTone()
 * @method static string manBowingDarkSkinTone()
 * @method static string womanBowing()
 * @method static string womanBowingLightSkinTone()
 * @method static string womanBowingMediumLightSkinTone()
 * @method static string womanBowingMediumSkinTone()
 * @method static string womanBowingMediumDarkSkinTone()
 * @method static string womanBowingDarkSkinTone()
 * @method static string personFacepalming()
 * @method static string personFacepalmingLightSkinTone()
 * @method static string personFacepalmingMediumLightSkinTone()
 * @method static string personFacepalmingMediumSkinTone()
 * @method static string personFacepalmingMediumDarkSkinTone()
 * @method static string personFacepalmingDarkSkinTone()
 * @method static string manFacepalming()
 * @method static string manFacepalmingLightSkinTone()
 * @method static string manFacepalmingMediumLightSkinTone()
 * @method static string manFacepalmingMediumSkinTone()
 * @method static string manFacepalmingMediumDarkSkinTone()
 * @method static string manFacepalmingDarkSkinTone()
 * @method static string womanFacepalming()
 * @method static string womanFacepalmingLightSkinTone()
 * @method static string womanFacepalmingMediumLightSkinTone()
 * @method static string womanFacepalmingMediumSkinTone()
 * @method static string womanFacepalmingMediumDarkSkinTone()
 * @method static string womanFacepalmingDarkSkinTone()
 * @method static string personShrugging()
 * @method static string personShruggingLightSkinTone()
 * @method static string personShruggingMediumLightSkinTone()
 * @method static string personShruggingMediumSkinTone()
 * @method static string personShruggingMediumDarkSkinTone()
 * @method static string personShruggingDarkSkinTone()
 * @method static string manShrugging()
 * @method static string manShruggingLightSkinTone()
 * @method static string manShruggingMediumLightSkinTone()
 * @method static string manShruggingMediumSkinTone()
 * @method static string manShruggingMediumDarkSkinTone()
 * @method static string manShruggingDarkSkinTone()
 * @method static string womanShrugging()
 * @method static string womanShruggingLightSkinTone()
 * @method static string womanShruggingMediumLightSkinTone()
 * @method static string womanShruggingMediumSkinTone()
 * @method static string womanShruggingMediumDarkSkinTone()
 * @method static string womanShruggingDarkSkinTone()
 * ##### Emoji subgroup: PERSON-ROLE #####
 * @method static string healthWorker()
 * @method static string healthWorkerLightSkinTone()
 * @method static string healthWorkerMediumLightSkinTone()
 * @method static string healthWorkerMediumSkinTone()
 * @method static string healthWorkerMediumDarkSkinTone()
 * @method static string healthWorkerDarkSkinTone()
 * @method static string manHealthWorker()
 * @method static string manHealthWorkerLightSkinTone()
 * @method static string manHealthWorkerMediumLightSkinTone()
 * @method static string manHealthWorkerMediumSkinTone()
 * @method static string manHealthWorkerMediumDarkSkinTone()
 * @method static string manHealthWorkerDarkSkinTone()
 * @method static string womanHealthWorker()
 * @method static string womanHealthWorkerLightSkinTone()
 * @method static string womanHealthWorkerMediumLightSkinTone()
 * @method static string womanHealthWorkerMediumSkinTone()
 * @method static string womanHealthWorkerMediumDarkSkinTone()
 * @method static string womanHealthWorkerDarkSkinTone()
 * @method static string student()
 * @method static string studentLightSkinTone()
 * @method static string studentMediumLightSkinTone()
 * @method static string studentMediumSkinTone()
 * @method static string studentMediumDarkSkinTone()
 * @method static string studentDarkSkinTone()
 * @method static string manStudent()
 * @method static string manStudentLightSkinTone()
 * @method static string manStudentMediumLightSkinTone()
 * @method static string manStudentMediumSkinTone()
 * @method static string manStudentMediumDarkSkinTone()
 * @method static string manStudentDarkSkinTone()
 * @method static string womanStudent()
 * @method static string womanStudentLightSkinTone()
 * @method static string womanStudentMediumLightSkinTone()
 * @method static string womanStudentMediumSkinTone()
 * @method static string womanStudentMediumDarkSkinTone()
 * @method static string womanStudentDarkSkinTone()
 * @method static string teacher()
 * @method static string teacherLightSkinTone()
 * @method static string teacherMediumLightSkinTone()
 * @method static string teacherMediumSkinTone()
 * @method static string teacherMediumDarkSkinTone()
 * @method static string teacherDarkSkinTone()
 * @method static string manTeacher()
 * @method static string manTeacherLightSkinTone()
 * @method static string manTeacherMediumLightSkinTone()
 * @method static string manTeacherMediumSkinTone()
 * @method static string manTeacherMediumDarkSkinTone()
 * @method static string manTeacherDarkSkinTone()
 * @method static string womanTeacher()
 * @method static string womanTeacherLightSkinTone()
 * @method static string womanTeacherMediumLightSkinTone()
 * @method static string womanTeacherMediumSkinTone()
 * @method static string womanTeacherMediumDarkSkinTone()
 * @method static string womanTeacherDarkSkinTone()
 * @method static string judge()
 * @method static string judgeLightSkinTone()
 * @method static string judgeMediumLightSkinTone()
 * @method static string judgeMediumSkinTone()
 * @method static string judgeMediumDarkSkinTone()
 * @method static string judgeDarkSkinTone()
 * @method static string manJudge()
 * @method static string manJudgeLightSkinTone()
 * @method static string manJudgeMediumLightSkinTone()
 * @method static string manJudgeMediumSkinTone()
 * @method static string manJudgeMediumDarkSkinTone()
 * @method static string manJudgeDarkSkinTone()
 * @method static string womanJudge()
 * @method static string womanJudgeLightSkinTone()
 * @method static string womanJudgeMediumLightSkinTone()
 * @method static string womanJudgeMediumSkinTone()
 * @method static string womanJudgeMediumDarkSkinTone()
 * @method static string womanJudgeDarkSkinTone()
 * @method static string farmer()
 * @method static string farmerLightSkinTone()
 * @method static string farmerMediumLightSkinTone()
 * @method static string farmerMediumSkinTone()
 * @method static string farmerMediumDarkSkinTone()
 * @method static string farmerDarkSkinTone()
 * @method static string manFarmer()
 * @method static string manFarmerLightSkinTone()
 * @method static string manFarmerMediumLightSkinTone()
 * @method static string manFarmerMediumSkinTone()
 * @method static string manFarmerMediumDarkSkinTone()
 * @method static string manFarmerDarkSkinTone()
 * @method static string womanFarmer()
 * @method static string womanFarmerLightSkinTone()
 * @method static string womanFarmerMediumLightSkinTone()
 * @method static string womanFarmerMediumSkinTone()
 * @method static string womanFarmerMediumDarkSkinTone()
 * @method static string womanFarmerDarkSkinTone()
 * @method static string cook()
 * @method static string cookLightSkinTone()
 * @method static string cookMediumLightSkinTone()
 * @method static string cookMediumSkinTone()
 * @method static string cookMediumDarkSkinTone()
 * @method static string cookDarkSkinTone()
 * @method static string manCook()
 * @method static string manCookLightSkinTone()
 * @method static string manCookMediumLightSkinTone()
 * @method static string manCookMediumSkinTone()
 * @method static string manCookMediumDarkSkinTone()
 * @method static string manCookDarkSkinTone()
 * @method static string womanCook()
 * @method static string womanCookLightSkinTone()
 * @method static string womanCookMediumLightSkinTone()
 * @method static string womanCookMediumSkinTone()
 * @method static string womanCookMediumDarkSkinTone()
 * @method static string womanCookDarkSkinTone()
 * @method static string mechanic()
 * @method static string mechanicLightSkinTone()
 * @method static string mechanicMediumLightSkinTone()
 * @method static string mechanicMediumSkinTone()
 * @method static string mechanicMediumDarkSkinTone()
 * @method static string mechanicDarkSkinTone()
 * @method static string manMechanic()
 * @method static string manMechanicLightSkinTone()
 * @method static string manMechanicMediumLightSkinTone()
 * @method static string manMechanicMediumSkinTone()
 * @method static string manMechanicMediumDarkSkinTone()
 * @method static string manMechanicDarkSkinTone()
 * @method static string womanMechanic()
 * @method static string womanMechanicLightSkinTone()
 * @method static string womanMechanicMediumLightSkinTone()
 * @method static string womanMechanicMediumSkinTone()
 * @method static string womanMechanicMediumDarkSkinTone()
 * @method static string womanMechanicDarkSkinTone()
 * @method static string factoryWorker()
 * @method static string factoryWorkerLightSkinTone()
 * @method static string factoryWorkerMediumLightSkinTone()
 * @method static string factoryWorkerMediumSkinTone()
 * @method static string factoryWorkerMediumDarkSkinTone()
 * @method static string factoryWorkerDarkSkinTone()
 * @method static string manFactoryWorker()
 * @method static string manFactoryWorkerLightSkinTone()
 * @method static string manFactoryWorkerMediumLightSkinTone()
 * @method static string manFactoryWorkerMediumSkinTone()
 * @method static string manFactoryWorkerMediumDarkSkinTone()
 * @method static string manFactoryWorkerDarkSkinTone()
 * @method static string womanFactoryWorker()
 * @method static string womanFactoryWorkerLightSkinTone()
 * @method static string womanFactoryWorkerMediumLightSkinTone()
 * @method static string womanFactoryWorkerMediumSkinTone()
 * @method static string womanFactoryWorkerMediumDarkSkinTone()
 * @method static string womanFactoryWorkerDarkSkinTone()
 * @method static string officeWorker()
 * @method static string officeWorkerLightSkinTone()
 * @method static string officeWorkerMediumLightSkinTone()
 * @method static string officeWorkerMediumSkinTone()
 * @method static string officeWorkerMediumDarkSkinTone()
 * @method static string officeWorkerDarkSkinTone()
 * @method static string manOfficeWorker()
 * @method static string manOfficeWorkerLightSkinTone()
 * @method static string manOfficeWorkerMediumLightSkinTone()
 * @method static string manOfficeWorkerMediumSkinTone()
 * @method static string manOfficeWorkerMediumDarkSkinTone()
 * @method static string manOfficeWorkerDarkSkinTone()
 * @method static string womanOfficeWorker()
 * @method static string womanOfficeWorkerLightSkinTone()
 * @method static string womanOfficeWorkerMediumLightSkinTone()
 * @method static string womanOfficeWorkerMediumSkinTone()
 * @method static string womanOfficeWorkerMediumDarkSkinTone()
 * @method static string womanOfficeWorkerDarkSkinTone()
 * @method static string scientist()
 * @method static string scientistLightSkinTone()
 * @method static string scientistMediumLightSkinTone()
 * @method static string scientistMediumSkinTone()
 * @method static string scientistMediumDarkSkinTone()
 * @method static string scientistDarkSkinTone()
 * @method static string manScientist()
 * @method static string manScientistLightSkinTone()
 * @method static string manScientistMediumLightSkinTone()
 * @method static string manScientistMediumSkinTone()
 * @method static string manScientistMediumDarkSkinTone()
 * @method static string manScientistDarkSkinTone()
 * @method static string womanScientist()
 * @method static string womanScientistLightSkinTone()
 * @method static string womanScientistMediumLightSkinTone()
 * @method static string womanScientistMediumSkinTone()
 * @method static string womanScientistMediumDarkSkinTone()
 * @method static string womanScientistDarkSkinTone()
 * @method static string technologist()
 * @method static string technologistLightSkinTone()
 * @method static string technologistMediumLightSkinTone()
 * @method static string technologistMediumSkinTone()
 * @method static string technologistMediumDarkSkinTone()
 * @method static string technologistDarkSkinTone()
 * @method static string manTechnologist()
 * @method static string manTechnologistLightSkinTone()
 * @method static string manTechnologistMediumLightSkinTone()
 * @method static string manTechnologistMediumSkinTone()
 * @method static string manTechnologistMediumDarkSkinTone()
 * @method static string manTechnologistDarkSkinTone()
 * @method static string womanTechnologist()
 * @method static string womanTechnologistLightSkinTone()
 * @method static string womanTechnologistMediumLightSkinTone()
 * @method static string womanTechnologistMediumSkinTone()
 * @method static string womanTechnologistMediumDarkSkinTone()
 * @method static string womanTechnologistDarkSkinTone()
 * @method static string singer()
 * @method static string singerLightSkinTone()
 * @method static string singerMediumLightSkinTone()
 * @method static string singerMediumSkinTone()
 * @method static string singerMediumDarkSkinTone()
 * @method static string singerDarkSkinTone()
 * @method static string manSinger()
 * @method static string manSingerLightSkinTone()
 * @method static string manSingerMediumLightSkinTone()
 * @method static string manSingerMediumSkinTone()
 * @method static string manSingerMediumDarkSkinTone()
 * @method static string manSingerDarkSkinTone()
 * @method static string womanSinger()
 * @method static string womanSingerLightSkinTone()
 * @method static string womanSingerMediumLightSkinTone()
 * @method static string womanSingerMediumSkinTone()
 * @method static string womanSingerMediumDarkSkinTone()
 * @method static string womanSingerDarkSkinTone()
 * @method static string artist()
 * @method static string artistLightSkinTone()
 * @method static string artistMediumLightSkinTone()
 * @method static string artistMediumSkinTone()
 * @method static string artistMediumDarkSkinTone()
 * @method static string artistDarkSkinTone()
 * @method static string manArtist()
 * @method static string manArtistLightSkinTone()
 * @method static string manArtistMediumLightSkinTone()
 * @method static string manArtistMediumSkinTone()
 * @method static string manArtistMediumDarkSkinTone()
 * @method static string manArtistDarkSkinTone()
 * @method static string womanArtist()
 * @method static string womanArtistLightSkinTone()
 * @method static string womanArtistMediumLightSkinTone()
 * @method static string womanArtistMediumSkinTone()
 * @method static string womanArtistMediumDarkSkinTone()
 * @method static string womanArtistDarkSkinTone()
 * @method static string pilot()
 * @method static string pilotLightSkinTone()
 * @method static string pilotMediumLightSkinTone()
 * @method static string pilotMediumSkinTone()
 * @method static string pilotMediumDarkSkinTone()
 * @method static string pilotDarkSkinTone()
 * @method static string manPilot()
 * @method static string manPilotLightSkinTone()
 * @method static string manPilotMediumLightSkinTone()
 * @method static string manPilotMediumSkinTone()
 * @method static string manPilotMediumDarkSkinTone()
 * @method static string manPilotDarkSkinTone()
 * @method static string womanPilot()
 * @method static string womanPilotLightSkinTone()
 * @method static string womanPilotMediumLightSkinTone()
 * @method static string womanPilotMediumSkinTone()
 * @method static string womanPilotMediumDarkSkinTone()
 * @method static string womanPilotDarkSkinTone()
 * @method static string astronaut()
 * @method static string astronautLightSkinTone()
 * @method static string astronautMediumLightSkinTone()
 * @method static string astronautMediumSkinTone()
 * @method static string astronautMediumDarkSkinTone()
 * @method static string astronautDarkSkinTone()
 * @method static string manAstronaut()
 * @method static string manAstronautLightSkinTone()
 * @method static string manAstronautMediumLightSkinTone()
 * @method static string manAstronautMediumSkinTone()
 * @method static string manAstronautMediumDarkSkinTone()
 * @method static string manAstronautDarkSkinTone()
 * @method static string womanAstronaut()
 * @method static string womanAstronautLightSkinTone()
 * @method static string womanAstronautMediumLightSkinTone()
 * @method static string womanAstronautMediumSkinTone()
 * @method static string womanAstronautMediumDarkSkinTone()
 * @method static string womanAstronautDarkSkinTone()
 * @method static string firefighter()
 * @method static string firefighterLightSkinTone()
 * @method static string firefighterMediumLightSkinTone()
 * @method static string firefighterMediumSkinTone()
 * @method static string firefighterMediumDarkSkinTone()
 * @method static string firefighterDarkSkinTone()
 * @method static string manFirefighter()
 * @method static string manFirefighterLightSkinTone()
 * @method static string manFirefighterMediumLightSkinTone()
 * @method static string manFirefighterMediumSkinTone()
 * @method static string manFirefighterMediumDarkSkinTone()
 * @method static string manFirefighterDarkSkinTone()
 * @method static string womanFirefighter()
 * @method static string womanFirefighterLightSkinTone()
 * @method static string womanFirefighterMediumLightSkinTone()
 * @method static string womanFirefighterMediumSkinTone()
 * @method static string womanFirefighterMediumDarkSkinTone()
 * @method static string womanFirefighterDarkSkinTone()
 * @method static string policeOfficer()
 * @method static string policeOfficerLightSkinTone()
 * @method static string policeOfficerMediumLightSkinTone()
 * @method static string policeOfficerMediumSkinTone()
 * @method static string policeOfficerMediumDarkSkinTone()
 * @method static string policeOfficerDarkSkinTone()
 * @method static string manPoliceOfficer()
 * @method static string manPoliceOfficerLightSkinTone()
 * @method static string manPoliceOfficerMediumLightSkinTone()
 * @method static string manPoliceOfficerMediumSkinTone()
 * @method static string manPoliceOfficerMediumDarkSkinTone()
 * @method static string manPoliceOfficerDarkSkinTone()
 * @method static string womanPoliceOfficer()
 * @method static string womanPoliceOfficerLightSkinTone()
 * @method static string womanPoliceOfficerMediumLightSkinTone()
 * @method static string womanPoliceOfficerMediumSkinTone()
 * @method static string womanPoliceOfficerMediumDarkSkinTone()
 * @method static string womanPoliceOfficerDarkSkinTone()
 * @method static string detective()
 * @method static string detectiveLightSkinTone()
 * @method static string detectiveMediumLightSkinTone()
 * @method static string detectiveMediumSkinTone()
 * @method static string detectiveMediumDarkSkinTone()
 * @method static string detectiveDarkSkinTone()
 * @method static string manDetective()
 * @method static string manDetectiveLightSkinTone()
 * @method static string manDetectiveMediumLightSkinTone()
 * @method static string manDetectiveMediumSkinTone()
 * @method static string manDetectiveMediumDarkSkinTone()
 * @method static string manDetectiveDarkSkinTone()
 * @method static string womanDetective()
 * @method static string womanDetectiveLightSkinTone()
 * @method static string womanDetectiveMediumLightSkinTone()
 * @method static string womanDetectiveMediumSkinTone()
 * @method static string womanDetectiveMediumDarkSkinTone()
 * @method static string womanDetectiveDarkSkinTone()
 * @method static string guard()
 * @method static string guardLightSkinTone()
 * @method static string guardMediumLightSkinTone()
 * @method static string guardMediumSkinTone()
 * @method static string guardMediumDarkSkinTone()
 * @method static string guardDarkSkinTone()
 * @method static string manGuard()
 * @method static string manGuardLightSkinTone()
 * @method static string manGuardMediumLightSkinTone()
 * @method static string manGuardMediumSkinTone()
 * @method static string manGuardMediumDarkSkinTone()
 * @method static string manGuardDarkSkinTone()
 * @method static string womanGuard()
 * @method static string womanGuardLightSkinTone()
 * @method static string womanGuardMediumLightSkinTone()
 * @method static string womanGuardMediumSkinTone()
 * @method static string womanGuardMediumDarkSkinTone()
 * @method static string womanGuardDarkSkinTone()
 * @method static string ninja()
 * @method static string ninjaLightSkinTone()
 * @method static string ninjaMediumLightSkinTone()
 * @method static string ninjaMediumSkinTone()
 * @method static string ninjaMediumDarkSkinTone()
 * @method static string ninjaDarkSkinTone()
 * @method static string constructionWorker()
 * @method static string constructionWorkerLightSkinTone()
 * @method static string constructionWorkerMediumLightSkinTone()
 * @method static string constructionWorkerMediumSkinTone()
 * @method static string constructionWorkerMediumDarkSkinTone()
 * @method static string constructionWorkerDarkSkinTone()
 * @method static string manConstructionWorker()
 * @method static string manConstructionWorkerLightSkinTone()
 * @method static string manConstructionWorkerMediumLightSkinTone()
 * @method static string manConstructionWorkerMediumSkinTone()
 * @method static string manConstructionWorkerMediumDarkSkinTone()
 * @method static string manConstructionWorkerDarkSkinTone()
 * @method static string womanConstructionWorker()
 * @method static string womanConstructionWorkerLightSkinTone()
 * @method static string womanConstructionWorkerMediumLightSkinTone()
 * @method static string womanConstructionWorkerMediumSkinTone()
 * @method static string womanConstructionWorkerMediumDarkSkinTone()
 * @method static string womanConstructionWorkerDarkSkinTone()
 * @method static string personWithCrown()
 * @method static string personWithCrownLightSkinTone()
 * @method static string personWithCrownMediumLightSkinTone()
 * @method static string personWithCrownMediumSkinTone()
 * @method static string personWithCrownMediumDarkSkinTone()
 * @method static string personWithCrownDarkSkinTone()
 * @method static string prince()
 * @method static string princeLightSkinTone()
 * @method static string princeMediumLightSkinTone()
 * @method static string princeMediumSkinTone()
 * @method static string princeMediumDarkSkinTone()
 * @method static string princeDarkSkinTone()
 * @method static string princess()
 * @method static string princessLightSkinTone()
 * @method static string princessMediumLightSkinTone()
 * @method static string princessMediumSkinTone()
 * @method static string princessMediumDarkSkinTone()
 * @method static string princessDarkSkinTone()
 * @method static string personWearingTurban()
 * @method static string personWearingTurbanLightSkinTone()
 * @method static string personWearingTurbanMediumLightSkinTone()
 * @method static string personWearingTurbanMediumSkinTone()
 * @method static string personWearingTurbanMediumDarkSkinTone()
 * @method static string personWearingTurbanDarkSkinTone()
 * @method static string manWearingTurban()
 * @method static string manWearingTurbanLightSkinTone()
 * @method static string manWearingTurbanMediumLightSkinTone()
 * @method static string manWearingTurbanMediumSkinTone()
 * @method static string manWearingTurbanMediumDarkSkinTone()
 * @method static string manWearingTurbanDarkSkinTone()
 * @method static string womanWearingTurban()
 * @method static string womanWearingTurbanLightSkinTone()
 * @method static string womanWearingTurbanMediumLightSkinTone()
 * @method static string womanWearingTurbanMediumSkinTone()
 * @method static string womanWearingTurbanMediumDarkSkinTone()
 * @method static string womanWearingTurbanDarkSkinTone()
 * @method static string personWithSkullcap()
 * @method static string personWithSkullcapLightSkinTone()
 * @method static string personWithSkullcapMediumLightSkinTone()
 * @method static string personWithSkullcapMediumSkinTone()
 * @method static string personWithSkullcapMediumDarkSkinTone()
 * @method static string personWithSkullcapDarkSkinTone()
 * @method static string womanWithHeadscarf()
 * @method static string womanWithHeadscarfLightSkinTone()
 * @method static string womanWithHeadscarfMediumLightSkinTone()
 * @method static string womanWithHeadscarfMediumSkinTone()
 * @method static string womanWithHeadscarfMediumDarkSkinTone()
 * @method static string womanWithHeadscarfDarkSkinTone()
 * @method static string personInTuxedo()
 * @method static string personInTuxedoLightSkinTone()
 * @method static string personInTuxedoMediumLightSkinTone()
 * @method static string personInTuxedoMediumSkinTone()
 * @method static string personInTuxedoMediumDarkSkinTone()
 * @method static string personInTuxedoDarkSkinTone()
 * @method static string manInTuxedo()
 * @method static string manInTuxedoLightSkinTone()
 * @method static string manInTuxedoMediumLightSkinTone()
 * @method static string manInTuxedoMediumSkinTone()
 * @method static string manInTuxedoMediumDarkSkinTone()
 * @method static string manInTuxedoDarkSkinTone()
 * @method static string womanInTuxedo()
 * @method static string womanInTuxedoLightSkinTone()
 * @method static string womanInTuxedoMediumLightSkinTone()
 * @method static string womanInTuxedoMediumSkinTone()
 * @method static string womanInTuxedoMediumDarkSkinTone()
 * @method static string womanInTuxedoDarkSkinTone()
 * @method static string personWithVeil()
 * @method static string personWithVeilLightSkinTone()
 * @method static string personWithVeilMediumLightSkinTone()
 * @method static string personWithVeilMediumSkinTone()
 * @method static string personWithVeilMediumDarkSkinTone()
 * @method static string personWithVeilDarkSkinTone()
 * @method static string manWithVeil()
 * @method static string manWithVeilLightSkinTone()
 * @method static string manWithVeilMediumLightSkinTone()
 * @method static string manWithVeilMediumSkinTone()
 * @method static string manWithVeilMediumDarkSkinTone()
 * @method static string manWithVeilDarkSkinTone()
 * @method static string womanWithVeil()
 * @method static string womanWithVeilLightSkinTone()
 * @method static string womanWithVeilMediumLightSkinTone()
 * @method static string womanWithVeilMediumSkinTone()
 * @method static string womanWithVeilMediumDarkSkinTone()
 * @method static string womanWithVeilDarkSkinTone()
 * @method static string pregnantWoman()
 * @method static string pregnantWomanLightSkinTone()
 * @method static string pregnantWomanMediumLightSkinTone()
 * @method static string pregnantWomanMediumSkinTone()
 * @method static string pregnantWomanMediumDarkSkinTone()
 * @method static string pregnantWomanDarkSkinTone()
 * @method static string pregnantMan()
 * @method static string pregnantManLightSkinTone()
 * @method static string pregnantManMediumLightSkinTone()
 * @method static string pregnantManMediumSkinTone()
 * @method static string pregnantManMediumDarkSkinTone()
 * @method static string pregnantManDarkSkinTone()
 * @method static string pregnantPerson()
 * @method static string pregnantPersonLightSkinTone()
 * @method static string pregnantPersonMediumLightSkinTone()
 * @method static string pregnantPersonMediumSkinTone()
 * @method static string pregnantPersonMediumDarkSkinTone()
 * @method static string pregnantPersonDarkSkinTone()
 * @method static string breastFeeding()
 * @method static string breastFeedingLightSkinTone()
 * @method static string breastFeedingMediumLightSkinTone()
 * @method static string breastFeedingMediumSkinTone()
 * @method static string breastFeedingMediumDarkSkinTone()
 * @method static string breastFeedingDarkSkinTone()
 * @method static string womanFeedingBaby()
 * @method static string womanFeedingBabyLightSkinTone()
 * @method static string womanFeedingBabyMediumLightSkinTone()
 * @method static string womanFeedingBabyMediumSkinTone()
 * @method static string womanFeedingBabyMediumDarkSkinTone()
 * @method static string womanFeedingBabyDarkSkinTone()
 * @method static string manFeedingBaby()
 * @method static string manFeedingBabyLightSkinTone()
 * @method static string manFeedingBabyMediumLightSkinTone()
 * @method static string manFeedingBabyMediumSkinTone()
 * @method static string manFeedingBabyMediumDarkSkinTone()
 * @method static string manFeedingBabyDarkSkinTone()
 * @method static string personFeedingBaby()
 * @method static string personFeedingBabyLightSkinTone()
 * @method static string personFeedingBabyMediumLightSkinTone()
 * @method static string personFeedingBabyMediumSkinTone()
 * @method static string personFeedingBabyMediumDarkSkinTone()
 * @method static string personFeedingBabyDarkSkinTone()
 * ##### Emoji subgroup: PERSON-FANTASY #####
 * @method static string babyAngel()
 * @method static string babyAngelLightSkinTone()
 * @method static string babyAngelMediumLightSkinTone()
 * @method static string babyAngelMediumSkinTone()
 * @method static string babyAngelMediumDarkSkinTone()
 * @method static string babyAngelDarkSkinTone()
 * @method static string santaClaus()
 * @method static string santaClausLightSkinTone()
 * @method static string santaClausMediumLightSkinTone()
 * @method static string santaClausMediumSkinTone()
 * @method static string santaClausMediumDarkSkinTone()
 * @method static string santaClausDarkSkinTone()
 * @method static string mrsClaus()
 * @method static string mrsClausLightSkinTone()
 * @method static string mrsClausMediumLightSkinTone()
 * @method static string mrsClausMediumSkinTone()
 * @method static string mrsClausMediumDarkSkinTone()
 * @method static string mrsClausDarkSkinTone()
 * @method static string mxClaus()
 * @method static string mxClausLightSkinTone()
 * @method static string mxClausMediumLightSkinTone()
 * @method static string mxClausMediumSkinTone()
 * @method static string mxClausMediumDarkSkinTone()
 * @method static string mxClausDarkSkinTone()
 * @method static string superhero()
 * @method static string superheroLightSkinTone()
 * @method static string superheroMediumLightSkinTone()
 * @method static string superheroMediumSkinTone()
 * @method static string superheroMediumDarkSkinTone()
 * @method static string superheroDarkSkinTone()
 * @method static string manSuperhero()
 * @method static string manSuperheroLightSkinTone()
 * @method static string manSuperheroMediumLightSkinTone()
 * @method static string manSuperheroMediumSkinTone()
 * @method static string manSuperheroMediumDarkSkinTone()
 * @method static string manSuperheroDarkSkinTone()
 * @method static string womanSuperhero()
 * @method static string womanSuperheroLightSkinTone()
 * @method static string womanSuperheroMediumLightSkinTone()
 * @method static string womanSuperheroMediumSkinTone()
 * @method static string womanSuperheroMediumDarkSkinTone()
 * @method static string womanSuperheroDarkSkinTone()
 * @method static string supervillain()
 * @method static string supervillainLightSkinTone()
 * @method static string supervillainMediumLightSkinTone()
 * @method static string supervillainMediumSkinTone()
 * @method static string supervillainMediumDarkSkinTone()
 * @method static string supervillainDarkSkinTone()
 * @method static string manSupervillain()
 * @method static string manSupervillainLightSkinTone()
 * @method static string manSupervillainMediumLightSkinTone()
 * @method static string manSupervillainMediumSkinTone()
 * @method static string manSupervillainMediumDarkSkinTone()
 * @method static string manSupervillainDarkSkinTone()
 * @method static string womanSupervillain()
 * @method static string womanSupervillainLightSkinTone()
 * @method static string womanSupervillainMediumLightSkinTone()
 * @method static string womanSupervillainMediumSkinTone()
 * @method static string womanSupervillainMediumDarkSkinTone()
 * @method static string womanSupervillainDarkSkinTone()
 * @method static string mage()
 * @method static string mageLightSkinTone()
 * @method static string mageMediumLightSkinTone()
 * @method static string mageMediumSkinTone()
 * @method static string mageMediumDarkSkinTone()
 * @method static string mageDarkSkinTone()
 * @method static string manMage()
 * @method static string manMageLightSkinTone()
 * @method static string manMageMediumLightSkinTone()
 * @method static string manMageMediumSkinTone()
 * @method static string manMageMediumDarkSkinTone()
 * @method static string manMageDarkSkinTone()
 * @method static string womanMage()
 * @method static string womanMageLightSkinTone()
 * @method static string womanMageMediumLightSkinTone()
 * @method static string womanMageMediumSkinTone()
 * @method static string womanMageMediumDarkSkinTone()
 * @method static string womanMageDarkSkinTone()
 * @method static string fairy()
 * @method static string fairyLightSkinTone()
 * @method static string fairyMediumLightSkinTone()
 * @method static string fairyMediumSkinTone()
 * @method static string fairyMediumDarkSkinTone()
 * @method static string fairyDarkSkinTone()
 * @method static string manFairy()
 * @method static string manFairyLightSkinTone()
 * @method static string manFairyMediumLightSkinTone()
 * @method static string manFairyMediumSkinTone()
 * @method static string manFairyMediumDarkSkinTone()
 * @method static string manFairyDarkSkinTone()
 * @method static string womanFairy()
 * @method static string womanFairyLightSkinTone()
 * @method static string womanFairyMediumLightSkinTone()
 * @method static string womanFairyMediumSkinTone()
 * @method static string womanFairyMediumDarkSkinTone()
 * @method static string womanFairyDarkSkinTone()
 * @method static string vampire()
 * @method static string vampireLightSkinTone()
 * @method static string vampireMediumLightSkinTone()
 * @method static string vampireMediumSkinTone()
 * @method static string vampireMediumDarkSkinTone()
 * @method static string vampireDarkSkinTone()
 * @method static string manVampire()
 * @method static string manVampireLightSkinTone()
 * @method static string manVampireMediumLightSkinTone()
 * @method static string manVampireMediumSkinTone()
 * @method static string manVampireMediumDarkSkinTone()
 * @method static string manVampireDarkSkinTone()
 * @method static string womanVampire()
 * @method static string womanVampireLightSkinTone()
 * @method static string womanVampireMediumLightSkinTone()
 * @method static string womanVampireMediumSkinTone()
 * @method static string womanVampireMediumDarkSkinTone()
 * @method static string womanVampireDarkSkinTone()
 * @method static string merperson()
 * @method static string merpersonLightSkinTone()
 * @method static string merpersonMediumLightSkinTone()
 * @method static string merpersonMediumSkinTone()
 * @method static string merpersonMediumDarkSkinTone()
 * @method static string merpersonDarkSkinTone()
 * @method static string merman()
 * @method static string mermanLightSkinTone()
 * @method static string mermanMediumLightSkinTone()
 * @method static string mermanMediumSkinTone()
 * @method static string mermanMediumDarkSkinTone()
 * @method static string mermanDarkSkinTone()
 * @method static string mermaid()
 * @method static string mermaidLightSkinTone()
 * @method static string mermaidMediumLightSkinTone()
 * @method static string mermaidMediumSkinTone()
 * @method static string mermaidMediumDarkSkinTone()
 * @method static string mermaidDarkSkinTone()
 * @method static string elf()
 * @method static string elfLightSkinTone()
 * @method static string elfMediumLightSkinTone()
 * @method static string elfMediumSkinTone()
 * @method static string elfMediumDarkSkinTone()
 * @method static string elfDarkSkinTone()
 * @method static string manElf()
 * @method static string manElfLightSkinTone()
 * @method static string manElfMediumLightSkinTone()
 * @method static string manElfMediumSkinTone()
 * @method static string manElfMediumDarkSkinTone()
 * @method static string manElfDarkSkinTone()
 * @method static string womanElf()
 * @method static string womanElfLightSkinTone()
 * @method static string womanElfMediumLightSkinTone()
 * @method static string womanElfMediumSkinTone()
 * @method static string womanElfMediumDarkSkinTone()
 * @method static string womanElfDarkSkinTone()
 * @method static string genie()
 * @method static string manGenie()
 * @method static string womanGenie()
 * @method static string zombie()
 * @method static string manZombie()
 * @method static string womanZombie()
 * @method static string troll()
 * ##### Emoji subgroup: PERSON-ACTIVITY #####
 * @method static string personGettingMassage()
 * @method static string personGettingMassageLightSkinTone()
 * @method static string personGettingMassageMediumLightSkinTone()
 * @method static string personGettingMassageMediumSkinTone()
 * @method static string personGettingMassageMediumDarkSkinTone()
 * @method static string personGettingMassageDarkSkinTone()
 * @method static string manGettingMassage()
 * @method static string manGettingMassageLightSkinTone()
 * @method static string manGettingMassageMediumLightSkinTone()
 * @method static string manGettingMassageMediumSkinTone()
 * @method static string manGettingMassageMediumDarkSkinTone()
 * @method static string manGettingMassageDarkSkinTone()
 * @method static string womanGettingMassage()
 * @method static string womanGettingMassageLightSkinTone()
 * @method static string womanGettingMassageMediumLightSkinTone()
 * @method static string womanGettingMassageMediumSkinTone()
 * @method static string womanGettingMassageMediumDarkSkinTone()
 * @method static string womanGettingMassageDarkSkinTone()
 * @method static string personGettingHaircut()
 * @method static string personGettingHaircutLightSkinTone()
 * @method static string personGettingHaircutMediumLightSkinTone()
 * @method static string personGettingHaircutMediumSkinTone()
 * @method static string personGettingHaircutMediumDarkSkinTone()
 * @method static string personGettingHaircutDarkSkinTone()
 * @method static string manGettingHaircut()
 * @method static string manGettingHaircutLightSkinTone()
 * @method static string manGettingHaircutMediumLightSkinTone()
 * @method static string manGettingHaircutMediumSkinTone()
 * @method static string manGettingHaircutMediumDarkSkinTone()
 * @method static string manGettingHaircutDarkSkinTone()
 * @method static string womanGettingHaircut()
 * @method static string womanGettingHaircutLightSkinTone()
 * @method static string womanGettingHaircutMediumLightSkinTone()
 * @method static string womanGettingHaircutMediumSkinTone()
 * @method static string womanGettingHaircutMediumDarkSkinTone()
 * @method static string womanGettingHaircutDarkSkinTone()
 * @method static string personWalking()
 * @method static string personWalkingLightSkinTone()
 * @method static string personWalkingMediumLightSkinTone()
 * @method static string personWalkingMediumSkinTone()
 * @method static string personWalkingMediumDarkSkinTone()
 * @method static string personWalkingDarkSkinTone()
 * @method static string manWalking()
 * @method static string manWalkingLightSkinTone()
 * @method static string manWalkingMediumLightSkinTone()
 * @method static string manWalkingMediumSkinTone()
 * @method static string manWalkingMediumDarkSkinTone()
 * @method static string manWalkingDarkSkinTone()
 * @method static string womanWalking()
 * @method static string womanWalkingLightSkinTone()
 * @method static string womanWalkingMediumLightSkinTone()
 * @method static string womanWalkingMediumSkinTone()
 * @method static string womanWalkingMediumDarkSkinTone()
 * @method static string womanWalkingDarkSkinTone()
 * @method static string personStanding()
 * @method static string personStandingLightSkinTone()
 * @method static string personStandingMediumLightSkinTone()
 * @method static string personStandingMediumSkinTone()
 * @method static string personStandingMediumDarkSkinTone()
 * @method static string personStandingDarkSkinTone()
 * @method static string manStanding()
 * @method static string manStandingLightSkinTone()
 * @method static string manStandingMediumLightSkinTone()
 * @method static string manStandingMediumSkinTone()
 * @method static string manStandingMediumDarkSkinTone()
 * @method static string manStandingDarkSkinTone()
 * @method static string womanStanding()
 * @method static string womanStandingLightSkinTone()
 * @method static string womanStandingMediumLightSkinTone()
 * @method static string womanStandingMediumSkinTone()
 * @method static string womanStandingMediumDarkSkinTone()
 * @method static string womanStandingDarkSkinTone()
 * @method static string personKneeling()
 * @method static string personKneelingLightSkinTone()
 * @method static string personKneelingMediumLightSkinTone()
 * @method static string personKneelingMediumSkinTone()
 * @method static string personKneelingMediumDarkSkinTone()
 * @method static string personKneelingDarkSkinTone()
 * @method static string manKneeling()
 * @method static string manKneelingLightSkinTone()
 * @method static string manKneelingMediumLightSkinTone()
 * @method static string manKneelingMediumSkinTone()
 * @method static string manKneelingMediumDarkSkinTone()
 * @method static string manKneelingDarkSkinTone()
 * @method static string womanKneeling()
 * @method static string womanKneelingLightSkinTone()
 * @method static string womanKneelingMediumLightSkinTone()
 * @method static string womanKneelingMediumSkinTone()
 * @method static string womanKneelingMediumDarkSkinTone()
 * @method static string womanKneelingDarkSkinTone()
 * @method static string personWithWhiteCane()
 * @method static string personWithWhiteCaneLightSkinTone()
 * @method static string personWithWhiteCaneMediumLightSkinTone()
 * @method static string personWithWhiteCaneMediumSkinTone()
 * @method static string personWithWhiteCaneMediumDarkSkinTone()
 * @method static string personWithWhiteCaneDarkSkinTone()
 * @method static string manWithWhiteCane()
 * @method static string manWithWhiteCaneLightSkinTone()
 * @method static string manWithWhiteCaneMediumLightSkinTone()
 * @method static string manWithWhiteCaneMediumSkinTone()
 * @method static string manWithWhiteCaneMediumDarkSkinTone()
 * @method static string manWithWhiteCaneDarkSkinTone()
 * @method static string womanWithWhiteCane()
 * @method static string womanWithWhiteCaneLightSkinTone()
 * @method static string womanWithWhiteCaneMediumLightSkinTone()
 * @method static string womanWithWhiteCaneMediumSkinTone()
 * @method static string womanWithWhiteCaneMediumDarkSkinTone()
 * @method static string womanWithWhiteCaneDarkSkinTone()
 * @method static string personInMotorizedWheelchair()
 * @method static string personInMotorizedWheelchairLightSkinTone()
 * @method static string personInMotorizedWheelchairMediumLightSkinTone()
 * @method static string personInMotorizedWheelchairMediumSkinTone()
 * @method static string personInMotorizedWheelchairMediumDarkSkinTone()
 * @method static string personInMotorizedWheelchairDarkSkinTone()
 * @method static string manInMotorizedWheelchair()
 * @method static string manInMotorizedWheelchairLightSkinTone()
 * @method static string manInMotorizedWheelchairMediumLightSkinTone()
 * @method static string manInMotorizedWheelchairMediumSkinTone()
 * @method static string manInMotorizedWheelchairMediumDarkSkinTone()
 * @method static string manInMotorizedWheelchairDarkSkinTone()
 * @method static string womanInMotorizedWheelchair()
 * @method static string womanInMotorizedWheelchairLightSkinTone()
 * @method static string womanInMotorizedWheelchairMediumLightSkinTone()
 * @method static string womanInMotorizedWheelchairMediumSkinTone()
 * @method static string womanInMotorizedWheelchairMediumDarkSkinTone()
 * @method static string womanInMotorizedWheelchairDarkSkinTone()
 * @method static string personInManualWheelchair()
 * @method static string personInManualWheelchairLightSkinTone()
 * @method static string personInManualWheelchairMediumLightSkinTone()
 * @method static string personInManualWheelchairMediumSkinTone()
 * @method static string personInManualWheelchairMediumDarkSkinTone()
 * @method static string personInManualWheelchairDarkSkinTone()
 * @method static string manInManualWheelchair()
 * @method static string manInManualWheelchairLightSkinTone()
 * @method static string manInManualWheelchairMediumLightSkinTone()
 * @method static string manInManualWheelchairMediumSkinTone()
 * @method static string manInManualWheelchairMediumDarkSkinTone()
 * @method static string manInManualWheelchairDarkSkinTone()
 * @method static string womanInManualWheelchair()
 * @method static string womanInManualWheelchairLightSkinTone()
 * @method static string womanInManualWheelchairMediumLightSkinTone()
 * @method static string womanInManualWheelchairMediumSkinTone()
 * @method static string womanInManualWheelchairMediumDarkSkinTone()
 * @method static string womanInManualWheelchairDarkSkinTone()
 * @method static string personRunning()
 * @method static string personRunningLightSkinTone()
 * @method static string personRunningMediumLightSkinTone()
 * @method static string personRunningMediumSkinTone()
 * @method static string personRunningMediumDarkSkinTone()
 * @method static string personRunningDarkSkinTone()
 * @method static string manRunning()
 * @method static string manRunningLightSkinTone()
 * @method static string manRunningMediumLightSkinTone()
 * @method static string manRunningMediumSkinTone()
 * @method static string manRunningMediumDarkSkinTone()
 * @method static string manRunningDarkSkinTone()
 * @method static string womanRunning()
 * @method static string womanRunningLightSkinTone()
 * @method static string womanRunningMediumLightSkinTone()
 * @method static string womanRunningMediumSkinTone()
 * @method static string womanRunningMediumDarkSkinTone()
 * @method static string womanRunningDarkSkinTone()
 * @method static string womanDancing()
 * @method static string womanDancingLightSkinTone()
 * @method static string womanDancingMediumLightSkinTone()
 * @method static string womanDancingMediumSkinTone()
 * @method static string womanDancingMediumDarkSkinTone()
 * @method static string womanDancingDarkSkinTone()
 * @method static string manDancing()
 * @method static string manDancingLightSkinTone()
 * @method static string manDancingMediumLightSkinTone()
 * @method static string manDancingMediumSkinTone()
 * @method static string manDancingMediumDarkSkinTone()
 * @method static string manDancingDarkSkinTone()
 * @method static string personInSuitLevitating()
 * @method static string personInSuitLevitatingLightSkinTone()
 * @method static string personInSuitLevitatingMediumLightSkinTone()
 * @method static string personInSuitLevitatingMediumSkinTone()
 * @method static string personInSuitLevitatingMediumDarkSkinTone()
 * @method static string personInSuitLevitatingDarkSkinTone()
 * @method static string peopleWithBunnyEars()
 * @method static string menWithBunnyEars()
 * @method static string womenWithBunnyEars()
 * @method static string personInSteamyRoom()
 * @method static string personInSteamyRoomLightSkinTone()
 * @method static string personInSteamyRoomMediumLightSkinTone()
 * @method static string personInSteamyRoomMediumSkinTone()
 * @method static string personInSteamyRoomMediumDarkSkinTone()
 * @method static string personInSteamyRoomDarkSkinTone()
 * @method static string manInSteamyRoom()
 * @method static string manInSteamyRoomLightSkinTone()
 * @method static string manInSteamyRoomMediumLightSkinTone()
 * @method static string manInSteamyRoomMediumSkinTone()
 * @method static string manInSteamyRoomMediumDarkSkinTone()
 * @method static string manInSteamyRoomDarkSkinTone()
 * @method static string womanInSteamyRoom()
 * @method static string womanInSteamyRoomLightSkinTone()
 * @method static string womanInSteamyRoomMediumLightSkinTone()
 * @method static string womanInSteamyRoomMediumSkinTone()
 * @method static string womanInSteamyRoomMediumDarkSkinTone()
 * @method static string womanInSteamyRoomDarkSkinTone()
 * @method static string personClimbing()
 * @method static string personClimbingLightSkinTone()
 * @method static string personClimbingMediumLightSkinTone()
 * @method static string personClimbingMediumSkinTone()
 * @method static string personClimbingMediumDarkSkinTone()
 * @method static string personClimbingDarkSkinTone()
 * @method static string manClimbing()
 * @method static string manClimbingLightSkinTone()
 * @method static string manClimbingMediumLightSkinTone()
 * @method static string manClimbingMediumSkinTone()
 * @method static string manClimbingMediumDarkSkinTone()
 * @method static string manClimbingDarkSkinTone()
 * @method static string womanClimbing()
 * @method static string womanClimbingLightSkinTone()
 * @method static string womanClimbingMediumLightSkinTone()
 * @method static string womanClimbingMediumSkinTone()
 * @method static string womanClimbingMediumDarkSkinTone()
 * @method static string womanClimbingDarkSkinTone()
 * ##### Emoji subgroup: PERSON-SPORT #####
 * @method static string personFencing()
 * @method static string horseRacing()
 * @method static string horseRacingLightSkinTone()
 * @method static string horseRacingMediumLightSkinTone()
 * @method static string horseRacingMediumSkinTone()
 * @method static string horseRacingMediumDarkSkinTone()
 * @method static string horseRacingDarkSkinTone()
 * @method static string skier()
 * @method static string snowboarder()
 * @method static string snowboarderLightSkinTone()
 * @method static string snowboarderMediumLightSkinTone()
 * @method static string snowboarderMediumSkinTone()
 * @method static string snowboarderMediumDarkSkinTone()
 * @method static string snowboarderDarkSkinTone()
 * @method static string personGolfing()
 * @method static string personGolfingLightSkinTone()
 * @method static string personGolfingMediumLightSkinTone()
 * @method static string personGolfingMediumSkinTone()
 * @method static string personGolfingMediumDarkSkinTone()
 * @method static string personGolfingDarkSkinTone()
 * @method static string manGolfing()
 * @method static string manGolfingLightSkinTone()
 * @method static string manGolfingMediumLightSkinTone()
 * @method static string manGolfingMediumSkinTone()
 * @method static string manGolfingMediumDarkSkinTone()
 * @method static string manGolfingDarkSkinTone()
 * @method static string womanGolfing()
 * @method static string womanGolfingLightSkinTone()
 * @method static string womanGolfingMediumLightSkinTone()
 * @method static string womanGolfingMediumSkinTone()
 * @method static string womanGolfingMediumDarkSkinTone()
 * @method static string womanGolfingDarkSkinTone()
 * @method static string personSurfing()
 * @method static string personSurfingLightSkinTone()
 * @method static string personSurfingMediumLightSkinTone()
 * @method static string personSurfingMediumSkinTone()
 * @method static string personSurfingMediumDarkSkinTone()
 * @method static string personSurfingDarkSkinTone()
 * @method static string manSurfing()
 * @method static string manSurfingLightSkinTone()
 * @method static string manSurfingMediumLightSkinTone()
 * @method static string manSurfingMediumSkinTone()
 * @method static string manSurfingMediumDarkSkinTone()
 * @method static string manSurfingDarkSkinTone()
 * @method static string womanSurfing()
 * @method static string womanSurfingLightSkinTone()
 * @method static string womanSurfingMediumLightSkinTone()
 * @method static string womanSurfingMediumSkinTone()
 * @method static string womanSurfingMediumDarkSkinTone()
 * @method static string womanSurfingDarkSkinTone()
 * @method static string personRowingBoat()
 * @method static string personRowingBoatLightSkinTone()
 * @method static string personRowingBoatMediumLightSkinTone()
 * @method static string personRowingBoatMediumSkinTone()
 * @method static string personRowingBoatMediumDarkSkinTone()
 * @method static string personRowingBoatDarkSkinTone()
 * @method static string manRowingBoat()
 * @method static string manRowingBoatLightSkinTone()
 * @method static string manRowingBoatMediumLightSkinTone()
 * @method static string manRowingBoatMediumSkinTone()
 * @method static string manRowingBoatMediumDarkSkinTone()
 * @method static string manRowingBoatDarkSkinTone()
 * @method static string womanRowingBoat()
 * @method static string womanRowingBoatLightSkinTone()
 * @method static string womanRowingBoatMediumLightSkinTone()
 * @method static string womanRowingBoatMediumSkinTone()
 * @method static string womanRowingBoatMediumDarkSkinTone()
 * @method static string womanRowingBoatDarkSkinTone()
 * @method static string personSwimming()
 * @method static string personSwimmingLightSkinTone()
 * @method static string personSwimmingMediumLightSkinTone()
 * @method static string personSwimmingMediumSkinTone()
 * @method static string personSwimmingMediumDarkSkinTone()
 * @method static string personSwimmingDarkSkinTone()
 * @method static string manSwimming()
 * @method static string manSwimmingLightSkinTone()
 * @method static string manSwimmingMediumLightSkinTone()
 * @method static string manSwimmingMediumSkinTone()
 * @method static string manSwimmingMediumDarkSkinTone()
 * @method static string manSwimmingDarkSkinTone()
 * @method static string womanSwimming()
 * @method static string womanSwimmingLightSkinTone()
 * @method static string womanSwimmingMediumLightSkinTone()
 * @method static string womanSwimmingMediumSkinTone()
 * @method static string womanSwimmingMediumDarkSkinTone()
 * @method static string womanSwimmingDarkSkinTone()
 * @method static string personBouncingBall()
 * @method static string personBouncingBallLightSkinTone()
 * @method static string personBouncingBallMediumLightSkinTone()
 * @method static string personBouncingBallMediumSkinTone()
 * @method static string personBouncingBallMediumDarkSkinTone()
 * @method static string personBouncingBallDarkSkinTone()
 * @method static string manBouncingBall()
 * @method static string manBouncingBallLightSkinTone()
 * @method static string manBouncingBallMediumLightSkinTone()
 * @method static string manBouncingBallMediumSkinTone()
 * @method static string manBouncingBallMediumDarkSkinTone()
 * @method static string manBouncingBallDarkSkinTone()
 * @method static string womanBouncingBall()
 * @method static string womanBouncingBallLightSkinTone()
 * @method static string womanBouncingBallMediumLightSkinTone()
 * @method static string womanBouncingBallMediumSkinTone()
 * @method static string womanBouncingBallMediumDarkSkinTone()
 * @method static string womanBouncingBallDarkSkinTone()
 * @method static string personLiftingWeights()
 * @method static string personLiftingWeightsLightSkinTone()
 * @method static string personLiftingWeightsMediumLightSkinTone()
 * @method static string personLiftingWeightsMediumSkinTone()
 * @method static string personLiftingWeightsMediumDarkSkinTone()
 * @method static string personLiftingWeightsDarkSkinTone()
 * @method static string manLiftingWeights()
 * @method static string manLiftingWeightsLightSkinTone()
 * @method static string manLiftingWeightsMediumLightSkinTone()
 * @method static string manLiftingWeightsMediumSkinTone()
 * @method static string manLiftingWeightsMediumDarkSkinTone()
 * @method static string manLiftingWeightsDarkSkinTone()
 * @method static string womanLiftingWeights()
 * @method static string womanLiftingWeightsLightSkinTone()
 * @method static string womanLiftingWeightsMediumLightSkinTone()
 * @method static string womanLiftingWeightsMediumSkinTone()
 * @method static string womanLiftingWeightsMediumDarkSkinTone()
 * @method static string womanLiftingWeightsDarkSkinTone()
 * @method static string personBiking()
 * @method static string personBikingLightSkinTone()
 * @method static string personBikingMediumLightSkinTone()
 * @method static string personBikingMediumSkinTone()
 * @method static string personBikingMediumDarkSkinTone()
 * @method static string personBikingDarkSkinTone()
 * @method static string manBiking()
 * @method static string manBikingLightSkinTone()
 * @method static string manBikingMediumLightSkinTone()
 * @method static string manBikingMediumSkinTone()
 * @method static string manBikingMediumDarkSkinTone()
 * @method static string manBikingDarkSkinTone()
 * @method static string womanBiking()
 * @method static string womanBikingLightSkinTone()
 * @method static string womanBikingMediumLightSkinTone()
 * @method static string womanBikingMediumSkinTone()
 * @method static string womanBikingMediumDarkSkinTone()
 * @method static string womanBikingDarkSkinTone()
 * @method static string personMountainBiking()
 * @method static string personMountainBikingLightSkinTone()
 * @method static string personMountainBikingMediumLightSkinTone()
 * @method static string personMountainBikingMediumSkinTone()
 * @method static string personMountainBikingMediumDarkSkinTone()
 * @method static string personMountainBikingDarkSkinTone()
 * @method static string manMountainBiking()
 * @method static string manMountainBikingLightSkinTone()
 * @method static string manMountainBikingMediumLightSkinTone()
 * @method static string manMountainBikingMediumSkinTone()
 * @method static string manMountainBikingMediumDarkSkinTone()
 * @method static string manMountainBikingDarkSkinTone()
 * @method static string womanMountainBiking()
 * @method static string womanMountainBikingLightSkinTone()
 * @method static string womanMountainBikingMediumLightSkinTone()
 * @method static string womanMountainBikingMediumSkinTone()
 * @method static string womanMountainBikingMediumDarkSkinTone()
 * @method static string womanMountainBikingDarkSkinTone()
 * @method static string personCartwheeling()
 * @method static string personCartwheelingLightSkinTone()
 * @method static string personCartwheelingMediumLightSkinTone()
 * @method static string personCartwheelingMediumSkinTone()
 * @method static string personCartwheelingMediumDarkSkinTone()
 * @method static string personCartwheelingDarkSkinTone()
 * @method static string manCartwheeling()
 * @method static string manCartwheelingLightSkinTone()
 * @method static string manCartwheelingMediumLightSkinTone()
 * @method static string manCartwheelingMediumSkinTone()
 * @method static string manCartwheelingMediumDarkSkinTone()
 * @method static string manCartwheelingDarkSkinTone()
 * @method static string womanCartwheeling()
 * @method static string womanCartwheelingLightSkinTone()
 * @method static string womanCartwheelingMediumLightSkinTone()
 * @method static string womanCartwheelingMediumSkinTone()
 * @method static string womanCartwheelingMediumDarkSkinTone()
 * @method static string womanCartwheelingDarkSkinTone()
 * @method static string peopleWrestling()
 * @method static string menWrestling()
 * @method static string womenWrestling()
 * @method static string personPlayingWaterPolo()
 * @method static string personPlayingWaterPoloLightSkinTone()
 * @method static string personPlayingWaterPoloMediumLightSkinTone()
 * @method static string personPlayingWaterPoloMediumSkinTone()
 * @method static string personPlayingWaterPoloMediumDarkSkinTone()
 * @method static string personPlayingWaterPoloDarkSkinTone()
 * @method static string manPlayingWaterPolo()
 * @method static string manPlayingWaterPoloLightSkinTone()
 * @method static string manPlayingWaterPoloMediumLightSkinTone()
 * @method static string manPlayingWaterPoloMediumSkinTone()
 * @method static string manPlayingWaterPoloMediumDarkSkinTone()
 * @method static string manPlayingWaterPoloDarkSkinTone()
 * @method static string womanPlayingWaterPolo()
 * @method static string womanPlayingWaterPoloLightSkinTone()
 * @method static string womanPlayingWaterPoloMediumLightSkinTone()
 * @method static string womanPlayingWaterPoloMediumSkinTone()
 * @method static string womanPlayingWaterPoloMediumDarkSkinTone()
 * @method static string womanPlayingWaterPoloDarkSkinTone()
 * @method static string personPlayingHandball()
 * @method static string personPlayingHandballLightSkinTone()
 * @method static string personPlayingHandballMediumLightSkinTone()
 * @method static string personPlayingHandballMediumSkinTone()
 * @method static string personPlayingHandballMediumDarkSkinTone()
 * @method static string personPlayingHandballDarkSkinTone()
 * @method static string manPlayingHandball()
 * @method static string manPlayingHandballLightSkinTone()
 * @method static string manPlayingHandballMediumLightSkinTone()
 * @method static string manPlayingHandballMediumSkinTone()
 * @method static string manPlayingHandballMediumDarkSkinTone()
 * @method static string manPlayingHandballDarkSkinTone()
 * @method static string womanPlayingHandball()
 * @method static string womanPlayingHandballLightSkinTone()
 * @method static string womanPlayingHandballMediumLightSkinTone()
 * @method static string womanPlayingHandballMediumSkinTone()
 * @method static string womanPlayingHandballMediumDarkSkinTone()
 * @method static string womanPlayingHandballDarkSkinTone()
 * @method static string personJuggling()
 * @method static string personJugglingLightSkinTone()
 * @method static string personJugglingMediumLightSkinTone()
 * @method static string personJugglingMediumSkinTone()
 * @method static string personJugglingMediumDarkSkinTone()
 * @method static string personJugglingDarkSkinTone()
 * @method static string manJuggling()
 * @method static string manJugglingLightSkinTone()
 * @method static string manJugglingMediumLightSkinTone()
 * @method static string manJugglingMediumSkinTone()
 * @method static string manJugglingMediumDarkSkinTone()
 * @method static string manJugglingDarkSkinTone()
 * @method static string womanJuggling()
 * @method static string womanJugglingLightSkinTone()
 * @method static string womanJugglingMediumLightSkinTone()
 * @method static string womanJugglingMediumSkinTone()
 * @method static string womanJugglingMediumDarkSkinTone()
 * @method static string womanJugglingDarkSkinTone()
 * ##### Emoji subgroup: PERSON-RESTING #####
 * @method static string personInLotusPosition()
 * @method static string personInLotusPositionLightSkinTone()
 * @method static string personInLotusPositionMediumLightSkinTone()
 * @method static string personInLotusPositionMediumSkinTone()
 * @method static string personInLotusPositionMediumDarkSkinTone()
 * @method static string personInLotusPositionDarkSkinTone()
 * @method static string manInLotusPosition()
 * @method static string manInLotusPositionLightSkinTone()
 * @method static string manInLotusPositionMediumLightSkinTone()
 * @method static string manInLotusPositionMediumSkinTone()
 * @method static string manInLotusPositionMediumDarkSkinTone()
 * @method static string manInLotusPositionDarkSkinTone()
 * @method static string womanInLotusPosition()
 * @method static string womanInLotusPositionLightSkinTone()
 * @method static string womanInLotusPositionMediumLightSkinTone()
 * @method static string womanInLotusPositionMediumSkinTone()
 * @method static string womanInLotusPositionMediumDarkSkinTone()
 * @method static string womanInLotusPositionDarkSkinTone()
 * @method static string personTakingBath()
 * @method static string personTakingBathLightSkinTone()
 * @method static string personTakingBathMediumLightSkinTone()
 * @method static string personTakingBathMediumSkinTone()
 * @method static string personTakingBathMediumDarkSkinTone()
 * @method static string personTakingBathDarkSkinTone()
 * @method static string personInBed()
 * @method static string personInBedLightSkinTone()
 * @method static string personInBedMediumLightSkinTone()
 * @method static string personInBedMediumSkinTone()
 * @method static string personInBedMediumDarkSkinTone()
 * @method static string personInBedDarkSkinTone()
 * ##### Emoji subgroup: FAMILY #####
 * @method static string peopleHoldingHands()
 * @method static string peopleHoldingHandsLightSkinTone()
 * @method static string peopleHoldingHandsLightSkinToneMediumLightSkinTone()
 * @method static string peopleHoldingHandsLightSkinToneMediumSkinTone()
 * @method static string peopleHoldingHandsLightSkinToneMediumDarkSkinTone()
 * @method static string peopleHoldingHandsLightSkinToneDarkSkinTone()
 * @method static string peopleHoldingHandsMediumLightSkinToneLightSkinTone()
 * @method static string peopleHoldingHandsMediumLightSkinTone()
 * @method static string peopleHoldingHandsMediumLightSkinToneMediumSkinTone()
 * @method static string peopleHoldingHandsMediumLightSkinToneMediumDarkSkinTone()
 * @method static string peopleHoldingHandsMediumLightSkinToneDarkSkinTone()
 * @method static string peopleHoldingHandsMediumSkinToneLightSkinTone()
 * @method static string peopleHoldingHandsMediumSkinToneMediumLightSkinTone()
 * @method static string peopleHoldingHandsMediumSkinTone()
 * @method static string peopleHoldingHandsMediumSkinToneMediumDarkSkinTone()
 * @method static string peopleHoldingHandsMediumSkinToneDarkSkinTone()
 * @method static string peopleHoldingHandsMediumDarkSkinToneLightSkinTone()
 * @method static string peopleHoldingHandsMediumDarkSkinToneMediumLightSkinTone()
 * @method static string peopleHoldingHandsMediumDarkSkinToneMediumSkinTone()
 * @method static string peopleHoldingHandsMediumDarkSkinTone()
 * @method static string peopleHoldingHandsMediumDarkSkinToneDarkSkinTone()
 * @method static string peopleHoldingHandsDarkSkinToneLightSkinTone()
 * @method static string peopleHoldingHandsDarkSkinToneMediumLightSkinTone()
 * @method static string peopleHoldingHandsDarkSkinToneMediumSkinTone()
 * @method static string peopleHoldingHandsDarkSkinToneMediumDarkSkinTone()
 * @method static string peopleHoldingHandsDarkSkinTone()
 * @method static string womenHoldingHands()
 * @method static string womenHoldingHandsLightSkinTone()
 * @method static string womenHoldingHandsLightSkinToneMediumLightSkinTone()
 * @method static string womenHoldingHandsLightSkinToneMediumSkinTone()
 * @method static string womenHoldingHandsLightSkinToneMediumDarkSkinTone()
 * @method static string womenHoldingHandsLightSkinToneDarkSkinTone()
 * @method static string womenHoldingHandsMediumLightSkinToneLightSkinTone()
 * @method static string womenHoldingHandsMediumLightSkinTone()
 * @method static string womenHoldingHandsMediumLightSkinToneMediumSkinTone()
 * @method static string womenHoldingHandsMediumLightSkinToneMediumDarkSkinTone()
 * @method static string womenHoldingHandsMediumLightSkinToneDarkSkinTone()
 * @method static string womenHoldingHandsMediumSkinToneLightSkinTone()
 * @method static string womenHoldingHandsMediumSkinToneMediumLightSkinTone()
 * @method static string womenHoldingHandsMediumSkinTone()
 * @method static string womenHoldingHandsMediumSkinToneMediumDarkSkinTone()
 * @method static string womenHoldingHandsMediumSkinToneDarkSkinTone()
 * @method static string womenHoldingHandsMediumDarkSkinToneLightSkinTone()
 * @method static string womenHoldingHandsMediumDarkSkinToneMediumLightSkinTone()
 * @method static string womenHoldingHandsMediumDarkSkinToneMediumSkinTone()
 * @method static string womenHoldingHandsMediumDarkSkinTone()
 * @method static string womenHoldingHandsMediumDarkSkinToneDarkSkinTone()
 * @method static string womenHoldingHandsDarkSkinToneLightSkinTone()
 * @method static string womenHoldingHandsDarkSkinToneMediumLightSkinTone()
 * @method static string womenHoldingHandsDarkSkinToneMediumSkinTone()
 * @method static string womenHoldingHandsDarkSkinToneMediumDarkSkinTone()
 * @method static string womenHoldingHandsDarkSkinTone()
 * @method static string womanAndManHoldingHands()
 * @method static string womanAndManHoldingHandsLightSkinTone()
 * @method static string womanAndManHoldingHandsLightSkinToneMediumLightSkinTone()
 * @method static string womanAndManHoldingHandsLightSkinToneMediumSkinTone()
 * @method static string womanAndManHoldingHandsLightSkinToneMediumDarkSkinTone()
 * @method static string womanAndManHoldingHandsLightSkinToneDarkSkinTone()
 * @method static string womanAndManHoldingHandsMediumLightSkinToneLightSkinTone()
 * @method static string womanAndManHoldingHandsMediumLightSkinTone()
 * @method static string womanAndManHoldingHandsMediumLightSkinToneMediumSkinTone()
 * @method static string womanAndManHoldingHandsMediumLightSkinToneMediumDarkSkinTone()
 * @method static string womanAndManHoldingHandsMediumLightSkinToneDarkSkinTone()
 * @method static string womanAndManHoldingHandsMediumSkinToneLightSkinTone()
 * @method static string womanAndManHoldingHandsMediumSkinToneMediumLightSkinTone()
 * @method static string womanAndManHoldingHandsMediumSkinTone()
 * @method static string womanAndManHoldingHandsMediumSkinToneMediumDarkSkinTone()
 * @method static string womanAndManHoldingHandsMediumSkinToneDarkSkinTone()
 * @method static string womanAndManHoldingHandsMediumDarkSkinToneLightSkinTone()
 * @method static string womanAndManHoldingHandsMediumDarkSkinToneMediumLightSkinTone()
 * @method static string womanAndManHoldingHandsMediumDarkSkinToneMediumSkinTone()
 * @method static string womanAndManHoldingHandsMediumDarkSkinTone()
 * @method static string womanAndManHoldingHandsMediumDarkSkinToneDarkSkinTone()
 * @method static string womanAndManHoldingHandsDarkSkinToneLightSkinTone()
 * @method static string womanAndManHoldingHandsDarkSkinToneMediumLightSkinTone()
 * @method static string womanAndManHoldingHandsDarkSkinToneMediumSkinTone()
 * @method static string womanAndManHoldingHandsDarkSkinToneMediumDarkSkinTone()
 * @method static string womanAndManHoldingHandsDarkSkinTone()
 * @method static string menHoldingHands()
 * @method static string menHoldingHandsLightSkinTone()
 * @method static string menHoldingHandsLightSkinToneMediumLightSkinTone()
 * @method static string menHoldingHandsLightSkinToneMediumSkinTone()
 * @method static string menHoldingHandsLightSkinToneMediumDarkSkinTone()
 * @method static string menHoldingHandsLightSkinToneDarkSkinTone()
 * @method static string menHoldingHandsMediumLightSkinToneLightSkinTone()
 * @method static string menHoldingHandsMediumLightSkinTone()
 * @method static string menHoldingHandsMediumLightSkinToneMediumSkinTone()
 * @method static string menHoldingHandsMediumLightSkinToneMediumDarkSkinTone()
 * @method static string menHoldingHandsMediumLightSkinToneDarkSkinTone()
 * @method static string menHoldingHandsMediumSkinToneLightSkinTone()
 * @method static string menHoldingHandsMediumSkinToneMediumLightSkinTone()
 * @method static string menHoldingHandsMediumSkinTone()
 * @method static string menHoldingHandsMediumSkinToneMediumDarkSkinTone()
 * @method static string menHoldingHandsMediumSkinToneDarkSkinTone()
 * @method static string menHoldingHandsMediumDarkSkinToneLightSkinTone()
 * @method static string menHoldingHandsMediumDarkSkinToneMediumLightSkinTone()
 * @method static string menHoldingHandsMediumDarkSkinToneMediumSkinTone()
 * @method static string menHoldingHandsMediumDarkSkinTone()
 * @method static string menHoldingHandsMediumDarkSkinToneDarkSkinTone()
 * @method static string menHoldingHandsDarkSkinToneLightSkinTone()
 * @method static string menHoldingHandsDarkSkinToneMediumLightSkinTone()
 * @method static string menHoldingHandsDarkSkinToneMediumSkinTone()
 * @method static string menHoldingHandsDarkSkinToneMediumDarkSkinTone()
 * @method static string menHoldingHandsDarkSkinTone()
 * @method static string kiss()
 * @method static string kissLightSkinTone()
 * @method static string kissMediumLightSkinTone()
 * @method static string kissMediumSkinTone()
 * @method static string kissMediumDarkSkinTone()
 * @method static string kissDarkSkinTone()
 * @method static string kissPersonPersonLightSkinToneMediumLightSkinTone()
 * @method static string kissPersonPersonLightSkinToneMediumSkinTone()
 * @method static string kissPersonPersonLightSkinToneMediumDarkSkinTone()
 * @method static string kissPersonPersonLightSkinToneDarkSkinTone()
 * @method static string kissPersonPersonMediumLightSkinToneLightSkinTone()
 * @method static string kissPersonPersonMediumLightSkinToneMediumSkinTone()
 * @method static string kissPersonPersonMediumLightSkinToneMediumDarkSkinTone()
 * @method static string kissPersonPersonMediumLightSkinToneDarkSkinTone()
 * @method static string kissPersonPersonMediumSkinToneLightSkinTone()
 * @method static string kissPersonPersonMediumSkinToneMediumLightSkinTone()
 * @method static string kissPersonPersonMediumSkinToneMediumDarkSkinTone()
 * @method static string kissPersonPersonMediumSkinToneDarkSkinTone()
 * @method static string kissPersonPersonMediumDarkSkinToneLightSkinTone()
 * @method static string kissPersonPersonMediumDarkSkinToneMediumLightSkinTone()
 * @method static string kissPersonPersonMediumDarkSkinToneMediumSkinTone()
 * @method static string kissPersonPersonMediumDarkSkinToneDarkSkinTone()
 * @method static string kissPersonPersonDarkSkinToneLightSkinTone()
 * @method static string kissPersonPersonDarkSkinToneMediumLightSkinTone()
 * @method static string kissPersonPersonDarkSkinToneMediumSkinTone()
 * @method static string kissPersonPersonDarkSkinToneMediumDarkSkinTone()
 * @method static string kissWomanMan()
 * @method static string kissWomanManLightSkinTone()
 * @method static string kissWomanManLightSkinToneMediumLightSkinTone()
 * @method static string kissWomanManLightSkinToneMediumSkinTone()
 * @method static string kissWomanManLightSkinToneMediumDarkSkinTone()
 * @method static string kissWomanManLightSkinToneDarkSkinTone()
 * @method static string kissWomanManMediumLightSkinToneLightSkinTone()
 * @method static string kissWomanManMediumLightSkinTone()
 * @method static string kissWomanManMediumLightSkinToneMediumSkinTone()
 * @method static string kissWomanManMediumLightSkinToneMediumDarkSkinTone()
 * @method static string kissWomanManMediumLightSkinToneDarkSkinTone()
 * @method static string kissWomanManMediumSkinToneLightSkinTone()
 * @method static string kissWomanManMediumSkinToneMediumLightSkinTone()
 * @method static string kissWomanManMediumSkinTone()
 * @method static string kissWomanManMediumSkinToneMediumDarkSkinTone()
 * @method static string kissWomanManMediumSkinToneDarkSkinTone()
 * @method static string kissWomanManMediumDarkSkinToneLightSkinTone()
 * @method static string kissWomanManMediumDarkSkinToneMediumLightSkinTone()
 * @method static string kissWomanManMediumDarkSkinToneMediumSkinTone()
 * @method static string kissWomanManMediumDarkSkinTone()
 * @method static string kissWomanManMediumDarkSkinToneDarkSkinTone()
 * @method static string kissWomanManDarkSkinToneLightSkinTone()
 * @method static string kissWomanManDarkSkinToneMediumLightSkinTone()
 * @method static string kissWomanManDarkSkinToneMediumSkinTone()
 * @method static string kissWomanManDarkSkinToneMediumDarkSkinTone()
 * @method static string kissWomanManDarkSkinTone()
 * @method static string kissManMan()
 * @method static string kissManManLightSkinTone()
 * @method static string kissManManLightSkinToneMediumLightSkinTone()
 * @method static string kissManManLightSkinToneMediumSkinTone()
 * @method static string kissManManLightSkinToneMediumDarkSkinTone()
 * @method static string kissManManLightSkinToneDarkSkinTone()
 * @method static string kissManManMediumLightSkinToneLightSkinTone()
 * @method static string kissManManMediumLightSkinTone()
 * @method static string kissManManMediumLightSkinToneMediumSkinTone()
 * @method static string kissManManMediumLightSkinToneMediumDarkSkinTone()
 * @method static string kissManManMediumLightSkinToneDarkSkinTone()
 * @method static string kissManManMediumSkinToneLightSkinTone()
 * @method static string kissManManMediumSkinToneMediumLightSkinTone()
 * @method static string kissManManMediumSkinTone()
 * @method static string kissManManMediumSkinToneMediumDarkSkinTone()
 * @method static string kissManManMediumSkinToneDarkSkinTone()
 * @method static string kissManManMediumDarkSkinToneLightSkinTone()
 * @method static string kissManManMediumDarkSkinToneMediumLightSkinTone()
 * @method static string kissManManMediumDarkSkinToneMediumSkinTone()
 * @method static string kissManManMediumDarkSkinTone()
 * @method static string kissManManMediumDarkSkinToneDarkSkinTone()
 * @method static string kissManManDarkSkinToneLightSkinTone()
 * @method static string kissManManDarkSkinToneMediumLightSkinTone()
 * @method static string kissManManDarkSkinToneMediumSkinTone()
 * @method static string kissManManDarkSkinToneMediumDarkSkinTone()
 * @method static string kissManManDarkSkinTone()
 * @method static string kissWomanWoman()
 * @method static string kissWomanWomanLightSkinTone()
 * @method static string kissWomanWomanLightSkinToneMediumLightSkinTone()
 * @method static string kissWomanWomanLightSkinToneMediumSkinTone()
 * @method static string kissWomanWomanLightSkinToneMediumDarkSkinTone()
 * @method static string kissWomanWomanLightSkinToneDarkSkinTone()
 * @method static string kissWomanWomanMediumLightSkinToneLightSkinTone()
 * @method static string kissWomanWomanMediumLightSkinTone()
 * @method static string kissWomanWomanMediumLightSkinToneMediumSkinTone()
 * @method static string kissWomanWomanMediumLightSkinToneMediumDarkSkinTone()
 * @method static string kissWomanWomanMediumLightSkinToneDarkSkinTone()
 * @method static string kissWomanWomanMediumSkinToneLightSkinTone()
 * @method static string kissWomanWomanMediumSkinToneMediumLightSkinTone()
 * @method static string kissWomanWomanMediumSkinTone()
 * @method static string kissWomanWomanMediumSkinToneMediumDarkSkinTone()
 * @method static string kissWomanWomanMediumSkinToneDarkSkinTone()
 * @method static string kissWomanWomanMediumDarkSkinToneLightSkinTone()
 * @method static string kissWomanWomanMediumDarkSkinToneMediumLightSkinTone()
 * @method static string kissWomanWomanMediumDarkSkinToneMediumSkinTone()
 * @method static string kissWomanWomanMediumDarkSkinTone()
 * @method static string kissWomanWomanMediumDarkSkinToneDarkSkinTone()
 * @method static string kissWomanWomanDarkSkinToneLightSkinTone()
 * @method static string kissWomanWomanDarkSkinToneMediumLightSkinTone()
 * @method static string kissWomanWomanDarkSkinToneMediumSkinTone()
 * @method static string kissWomanWomanDarkSkinToneMediumDarkSkinTone()
 * @method static string kissWomanWomanDarkSkinTone()
 * @method static string coupleWithHeart()
 * @method static string coupleWithHeartLightSkinTone()
 * @method static string coupleWithHeartMediumLightSkinTone()
 * @method static string coupleWithHeartMediumSkinTone()
 * @method static string coupleWithHeartMediumDarkSkinTone()
 * @method static string coupleWithHeartDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonLightSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartPersonPersonLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartPersonPersonLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumLightSkinToneLightSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumSkinToneLightSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumSkinToneDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartPersonPersonMediumDarkSkinToneDarkSkinTone()
 * @method static string coupleWithHeartPersonPersonDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartPersonPersonDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartPersonPersonDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartPersonPersonDarkSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanMan()
 * @method static string coupleWithHeartWomanManLightSkinTone()
 * @method static string coupleWithHeartWomanManLightSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanManLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanManLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanManLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanManMediumLightSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanManMediumLightSkinTone()
 * @method static string coupleWithHeartWomanManMediumLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanManMediumLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanManMediumLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanManMediumSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanManMediumSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanManMediumSkinTone()
 * @method static string coupleWithHeartWomanManMediumSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanManMediumSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanManMediumDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanManMediumDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanManMediumDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanManMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanManMediumDarkSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanManDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanManDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanManDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanManDarkSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanManDarkSkinTone()
 * @method static string coupleWithHeartManMan()
 * @method static string coupleWithHeartManManLightSkinTone()
 * @method static string coupleWithHeartManManLightSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartManManLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartManManLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartManManLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartManManMediumLightSkinToneLightSkinTone()
 * @method static string coupleWithHeartManManMediumLightSkinTone()
 * @method static string coupleWithHeartManManMediumLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartManManMediumLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartManManMediumLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartManManMediumSkinToneLightSkinTone()
 * @method static string coupleWithHeartManManMediumSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartManManMediumSkinTone()
 * @method static string coupleWithHeartManManMediumSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartManManMediumSkinToneDarkSkinTone()
 * @method static string coupleWithHeartManManMediumDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartManManMediumDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartManManMediumDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartManManMediumDarkSkinTone()
 * @method static string coupleWithHeartManManMediumDarkSkinToneDarkSkinTone()
 * @method static string coupleWithHeartManManDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartManManDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartManManDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartManManDarkSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartManManDarkSkinTone()
 * @method static string coupleWithHeartWomanWoman()
 * @method static string coupleWithHeartWomanWomanLightSkinTone()
 * @method static string coupleWithHeartWomanWomanLightSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanWomanLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanWomanLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumLightSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumLightSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumLightSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumLightSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumLightSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanMediumDarkSkinToneDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanDarkSkinToneLightSkinTone()
 * @method static string coupleWithHeartWomanWomanDarkSkinToneMediumLightSkinTone()
 * @method static string coupleWithHeartWomanWomanDarkSkinToneMediumSkinTone()
 * @method static string coupleWithHeartWomanWomanDarkSkinToneMediumDarkSkinTone()
 * @method static string coupleWithHeartWomanWomanDarkSkinTone()
 * @method static string family()
 * @method static string familyManWomanBoy()
 * @method static string familyManWomanGirl()
 * @method static string familyManWomanGirlBoy()
 * @method static string familyManWomanBoyBoy()
 * @method static string familyManWomanGirlGirl()
 * @method static string familyManManBoy()
 * @method static string familyManManGirl()
 * @method static string familyManManGirlBoy()
 * @method static string familyManManBoyBoy()
 * @method static string familyManManGirlGirl()
 * @method static string familyWomanWomanBoy()
 * @method static string familyWomanWomanGirl()
 * @method static string familyWomanWomanGirlBoy()
 * @method static string familyWomanWomanBoyBoy()
 * @method static string familyWomanWomanGirlGirl()
 * @method static string familyManBoy()
 * @method static string familyManBoyBoy()
 * @method static string familyManGirl()
 * @method static string familyManGirlBoy()
 * @method static string familyManGirlGirl()
 * @method static string familyWomanBoy()
 * @method static string familyWomanBoyBoy()
 * @method static string familyWomanGirl()
 * @method static string familyWomanGirlBoy()
 * @method static string familyWomanGirlGirl()
 * ##### Emoji subgroup: PERSON-SYMBOL #####
 * @method static string speakingHead()
 * @method static string bustInSilhouette()
 * @method static string bustsInSilhouette()
 * @method static string peopleHugging()
 * @method static string footprints()
 * ##### Emoji group: COMPONENT #####
 * ##### Emoji subgroup: SKIN-TONE #####
 * @method static string lightSkinTone()
 * @method static string mediumLightSkinTone()
 * @method static string mediumSkinTone()
 * @method static string mediumDarkSkinTone()
 * @method static string darkSkinTone()
 * ##### Emoji subgroup: HAIR-STYLE #####
 * @method static string redHair()
 * @method static string curlyHair()
 * @method static string whiteHair()
 * @method static string bald()
 * ##### Emoji group: ANIMALS & NATURE #####
 * ##### Emoji subgroup: ANIMAL-MAMMAL #####
 * @method static string monkeyFace()
 * @method static string monkey()
 * @method static string gorilla()
 * @method static string orangutan()
 * @method static string dogFace()
 * @method static string dog()
 * @method static string guideDog()
 * @method static string serviceDog()
 * @method static string poodle()
 * @method static string wolf()
 * @method static string fox()
 * @method static string raccoon()
 * @method static string catFace()
 * @method static string cat()
 * @method static string blackCat()
 * @method static string lion()
 * @method static string tigerFace()
 * @method static string tiger()
 * @method static string leopard()
 * @method static string horseFace()
 * @method static string horse()
 * @method static string unicorn()
 * @method static string zebra()
 * @method static string deer()
 * @method static string bison()
 * @method static string cowFace()
 * @method static string ox()
 * @method static string waterBuffalo()
 * @method static string cow()
 * @method static string pigFace()
 * @method static string pig()
 * @method static string boar()
 * @method static string pigNose()
 * @method static string ram()
 * @method static string ewe()
 * @method static string goat()
 * @method static string camel()
 * @method static string twoHumpCamel()
 * @method static string llama()
 * @method static string giraffe()
 * @method static string elephant()
 * @method static string mammoth()
 * @method static string rhinoceros()
 * @method static string hippopotamus()
 * @method static string mouseFace()
 * @method static string mouse()
 * @method static string rat()
 * @method static string hamster()
 * @method static string rabbitFace()
 * @method static string rabbit()
 * @method static string chipmunk()
 * @method static string beaver()
 * @method static string hedgehog()
 * @method static string bat()
 * @method static string bear()
 * @method static string polarBear()
 * @method static string koala()
 * @method static string panda()
 * @method static string sloth()
 * @method static string otter()
 * @method static string skunk()
 * @method static string kangaroo()
 * @method static string badger()
 * @method static string pawPrints()
 * ##### Emoji subgroup: ANIMAL-BIRD #####
 * @method static string turkey()
 * @method static string chicken()
 * @method static string rooster()
 * @method static string hatchingChick()
 * @method static string babyChick()
 * @method static string frontFacingBabyChick()
 * @method static string bird()
 * @method static string penguin()
 * @method static string dove()
 * @method static string eagle()
 * @method static string duck()
 * @method static string swan()
 * @method static string owl()
 * @method static string dodo()
 * @method static string feather()
 * @method static string flamingo()
 * @method static string peacock()
 * @method static string parrot()
 * ##### Emoji subgroup: ANIMAL-AMPHIBIAN #####
 * @method static string frog()
 * ##### Emoji subgroup: ANIMAL-REPTILE #####
 * @method static string crocodile()
 * @method static string turtle()
 * @method static string lizard()
 * @method static string snake()
 * @method static string dragonFace()
 * @method static string dragon()
 * @method static string sauropod()
 * @method static string tRex()
 * ##### Emoji subgroup: ANIMAL-MARINE #####
 * @method static string spoutingWhale()
 * @method static string whale()
 * @method static string dolphin()
 * @method static string seal()
 * @method static string fish()
 * @method static string tropicalFish()
 * @method static string blowfish()
 * @method static string shark()
 * @method static string octopus()
 * @method static string spiralShell()
 * @method static string coral()
 * ##### Emoji subgroup: ANIMAL-BUG #####
 * @method static string snail()
 * @method static string butterfly()
 * @method static string bug()
 * @method static string ant()
 * @method static string honeybee()
 * @method static string beetle()
 * @method static string ladyBeetle()
 * @method static string cricket()
 * @method static string cockroach()
 * @method static string spider()
 * @method static string spiderWeb()
 * @method static string scorpion()
 * @method static string mosquito()
 * @method static string fly()
 * @method static string worm()
 * @method static string microbe()
 * ##### Emoji subgroup: PLANT-FLOWER #####
 * @method static string bouquet()
 * @method static string cherryBlossom()
 * @method static string whiteFlower()
 * @method static string lotus()
 * @method static string rosette()
 * @method static string rose()
 * @method static string wiltedFlower()
 * @method static string hibiscus()
 * @method static string sunflower()
 * @method static string blossom()
 * @method static string tulip()
 * ##### Emoji subgroup: PLANT-OTHER #####
 * @method static string seedling()
 * @method static string pottedPlant()
 * @method static string evergreenTree()
 * @method static string deciduousTree()
 * @method static string palmTree()
 * @method static string cactus()
 * @method static string sheafOfRice()
 * @method static string herb()
 * @method static string shamrock()
 * @method static string fourLeafClover()
 * @method static string mapleLeaf()
 * @method static string fallenLeaf()
 * @method static string leafFlutteringInWind()
 * @method static string emptyNest()
 * @method static string nestWithEggs()
 * ##### Emoji group: FOOD & DRINK #####
 * ##### Emoji subgroup: FOOD-FRUIT #####
 * @method static string grapes()
 * @method static string melon()
 * @method static string watermelon()
 * @method static string tangerine()
 * @method static string lemon()
 * @method static string banana()
 * @method static string pineapple()
 * @method static string mango()
 * @method static string redApple()
 * @method static string greenApple()
 * @method static string pear()
 * @method static string peach()
 * @method static string cherries()
 * @method static string strawberry()
 * @method static string blueberries()
 * @method static string kiwiFruit()
 * @method static string tomato()
 * @method static string olive()
 * @method static string coconut()
 * ##### Emoji subgroup: FOOD-VEGETABLE #####
 * @method static string avocado()
 * @method static string eggplant()
 * @method static string potato()
 * @method static string carrot()
 * @method static string earOfCorn()
 * @method static string hotPepper()
 * @method static string bellPepper()
 * @method static string cucumber()
 * @method static string leafyGreen()
 * @method static string broccoli()
 * @method static string garlic()
 * @method static string onion()
 * @method static string mushroom()
 * @method static string peanuts()
 * @method static string beans()
 * @method static string chestnut()
 * ##### Emoji subgroup: FOOD-PREPARED #####
 * @method static string bread()
 * @method static string croissant()
 * @method static string baguetteBread()
 * @method static string flatbread()
 * @method static string pretzel()
 * @method static string bagel()
 * @method static string pancakes()
 * @method static string waffle()
 * @method static string cheeseWedge()
 * @method static string meatOnBone()
 * @method static string poultryLeg()
 * @method static string cutOfMeat()
 * @method static string bacon()
 * @method static string hamburger()
 * @method static string frenchFries()
 * @method static string pizza()
 * @method static string hotDog()
 * @method static string sandwich()
 * @method static string taco()
 * @method static string burrito()
 * @method static string tamale()
 * @method static string stuffedFlatbread()
 * @method static string falafel()
 * @method static string egg()
 * @method static string cooking()
 * @method static string shallowPanOfFood()
 * @method static string potOfFood()
 * @method static string fondue()
 * @method static string bowlWithSpoon()
 * @method static string greenSalad()
 * @method static string popcorn()
 * @method static string butter()
 * @method static string salt()
 * @method static string cannedFood()
 * ##### Emoji subgroup: FOOD-ASIAN #####
 * @method static string bentoBox()
 * @method static string riceCracker()
 * @method static string riceBall()
 * @method static string cookedRice()
 * @method static string curryRice()
 * @method static string steamingBowl()
 * @method static string spaghetti()
 * @method static string roastedSweetPotato()
 * @method static string oden()
 * @method static string sushi()
 * @method static string friedShrimp()
 * @method static string fishCakeWithSwirl()
 * @method static string moonCake()
 * @method static string dango()
 * @method static string dumpling()
 * @method static string fortuneCookie()
 * @method static string takeoutBox()
 * ##### Emoji subgroup: FOOD-MARINE #####
 * @method static string crab()
 * @method static string lobster()
 * @method static string shrimp()
 * @method static string squid()
 * @method static string oyster()
 * ##### Emoji subgroup: FOOD-SWEET #####
 * @method static string softIceCream()
 * @method static string shavedIce()
 * @method static string iceCream()
 * @method static string doughnut()
 * @method static string cookie()
 * @method static string birthdayCake()
 * @method static string shortcake()
 * @method static string cupcake()
 * @method static string pie()
 * @method static string chocolateBar()
 * @method static string candy()
 * @method static string lollipop()
 * @method static string custard()
 * @method static string honeyPot()
 * ##### Emoji subgroup: DRINK #####
 * @method static string babyBottle()
 * @method static string glassOfMilk()
 * @method static string hotBeverage()
 * @method static string teapot()
 * @method static string teacupWithoutHandle()
 * @method static string sake()
 * @method static string bottleWithPoppingCork()
 * @method static string wineGlass()
 * @method static string cocktailGlass()
 * @method static string tropicalDrink()
 * @method static string beerMug()
 * @method static string clinkingBeerMugs()
 * @method static string clinkingGlasses()
 * @method static string tumblerGlass()
 * @method static string pouringLiquid()
 * @method static string cupWithStraw()
 * @method static string bubbleTea()
 * @method static string beverageBox()
 * @method static string mate()
 * @method static string ice()
 * ##### Emoji subgroup: DISHWARE #####
 * @method static string chopsticks()
 * @method static string forkAndKnifeWithPlate()
 * @method static string forkAndKnife()
 * @method static string spoon()
 * @method static string kitchenKnife()
 * @method static string jar()
 * @method static string amphora()
 * ##### Emoji group: TRAVEL & PLACES #####
 * ##### Emoji subgroup: PLACE-MAP #####
 * @method static string globeShowingEuropeAfrica()
 * @method static string globeShowingAmericas()
 * @method static string globeShowingAsiaAustralia()
 * @method static string globeWithMeridians()
 * @method static string worldMap()
 * @method static string mapOfJapan()
 * @method static string compass()
 * ##### Emoji subgroup: PLACE-GEOGRAPHIC #####
 * @method static string snowCappedMountain()
 * @method static string mountain()
 * @method static string volcano()
 * @method static string mountFuji()
 * @method static string camping()
 * @method static string beachWithUmbrella()
 * @method static string desert()
 * @method static string desertIsland()
 * @method static string nationalPark()
 * ##### Emoji subgroup: PLACE-BUILDING #####
 * @method static string stadium()
 * @method static string classicalBuilding()
 * @method static string buildingConstruction()
 * @method static string brick()
 * @method static string rock()
 * @method static string wood()
 * @method static string hut()
 * @method static string houses()
 * @method static string derelictHouse()
 * @method static string house()
 * @method static string houseWithGarden()
 * @method static string officeBuilding()
 * @method static string japanesePostOffice()
 * @method static string postOffice()
 * @method static string hospital()
 * @method static string bank()
 * @method static string hotel()
 * @method static string loveHotel()
 * @method static string convenienceStore()
 * @method static string school()
 * @method static string departmentStore()
 * @method static string factory()
 * @method static string japaneseCastle()
 * @method static string castle()
 * @method static string wedding()
 * @method static string tokyoTower()
 * @method static string statueOfLiberty()
 * ##### Emoji subgroup: PLACE-RELIGIOUS #####
 * @method static string church()
 * @method static string mosque()
 * @method static string hinduTemple()
 * @method static string synagogue()
 * @method static string shintoShrine()
 * @method static string kaaba()
 * ##### Emoji subgroup: PLACE-OTHER #####
 * @method static string fountain()
 * @method static string tent()
 * @method static string foggy()
 * @method static string nightWithStars()
 * @method static string cityscape()
 * @method static string sunriseOverMountains()
 * @method static string sunrise()
 * @method static string cityscapeAtDusk()
 * @method static string sunset()
 * @method static string bridgeAtNight()
 * @method static string hotSprings()
 * @method static string carouselHorse()
 * @method static string playgroundSlide()
 * @method static string ferrisWheel()
 * @method static string rollerCoaster()
 * @method static string barberPole()
 * @method static string circusTent()
 * ##### Emoji subgroup: TRANSPORT-GROUND #####
 * @method static string locomotive()
 * @method static string railwayCar()
 * @method static string highSpeedTrain()
 * @method static string bulletTrain()
 * @method static string train()
 * @method static string metro()
 * @method static string lightRail()
 * @method static string station()
 * @method static string tram()
 * @method static string monorail()
 * @method static string mountainRailway()
 * @method static string tramCar()
 * @method static string bus()
 * @method static string oncomingBus()
 * @method static string trolleybus()
 * @method static string minibus()
 * @method static string ambulance()
 * @method static string fireEngine()
 * @method static string policeCar()
 * @method static string oncomingPoliceCar()
 * @method static string taxi()
 * @method static string oncomingTaxi()
 * @method static string automobile()
 * @method static string oncomingAutomobile()
 * @method static string sportUtilityVehicle()
 * @method static string pickupTruck()
 * @method static string deliveryTruck()
 * @method static string articulatedLorry()
 * @method static string tractor()
 * @method static string racingCar()
 * @method static string motorcycle()
 * @method static string motorScooter()
 * @method static string manualWheelchair()
 * @method static string motorizedWheelchair()
 * @method static string autoRickshaw()
 * @method static string bicycle()
 * @method static string kickScooter()
 * @method static string skateboard()
 * @method static string rollerSkate()
 * @method static string busStop()
 * @method static string motorway()
 * @method static string railwayTrack()
 * @method static string oilDrum()
 * @method static string fuelPump()
 * @method static string wheel()
 * @method static string policeCarLight()
 * @method static string horizontalTrafficLight()
 * @method static string verticalTrafficLight()
 * @method static string stopSign()
 * @method static string construction()
 * ##### Emoji subgroup: TRANSPORT-WATER #####
 * @method static string anchor()
 * @method static string ringBuoy()
 * @method static string sailboat()
 * @method static string canoe()
 * @method static string speedboat()
 * @method static string passengerShip()
 * @method static string ferry()
 * @method static string motorBoat()
 * @method static string ship()
 * ##### Emoji subgroup: TRANSPORT-AIR #####
 * @method static string airplane()
 * @method static string smallAirplane()
 * @method static string airplaneDeparture()
 * @method static string airplaneArrival()
 * @method static string parachute()
 * @method static string seat()
 * @method static string helicopter()
 * @method static string suspensionRailway()
 * @method static string mountainCableway()
 * @method static string aerialTramway()
 * @method static string satellite()
 * @method static string rocket()
 * @method static string flyingSaucer()
 * ##### Emoji subgroup: HOTEL #####
 * @method static string bellhopBell()
 * @method static string luggage()
 * ##### Emoji subgroup: TIME #####
 * @method static string hourglassDone()
 * @method static string hourglassNotDone()
 * @method static string watch()
 * @method static string alarmClock()
 * @method static string stopwatch()
 * @method static string timerClock()
 * @method static string mantelpieceClock()
 * @method static string twelveOClock()
 * @method static string twelveThirty()
 * @method static string oneOClock()
 * @method static string oneThirty()
 * @method static string twoOClock()
 * @method static string twoThirty()
 * @method static string threeOClock()
 * @method static string threeThirty()
 * @method static string fourOClock()
 * @method static string fourThirty()
 * @method static string fiveOClock()
 * @method static string fiveThirty()
 * @method static string sixOClock()
 * @method static string sixThirty()
 * @method static string sevenOClock()
 * @method static string sevenThirty()
 * @method static string eightOClock()
 * @method static string eightThirty()
 * @method static string nineOClock()
 * @method static string nineThirty()
 * @method static string tenOClock()
 * @method static string tenThirty()
 * @method static string elevenOClock()
 * @method static string elevenThirty()
 * ##### Emoji subgroup: SKY & WEATHER #####
 * @method static string newMoon()
 * @method static string waxingCrescentMoon()
 * @method static string firstQuarterMoon()
 * @method static string waxingGibbousMoon()
 * @method static string fullMoon()
 * @method static string waningGibbousMoon()
 * @method static string lastQuarterMoon()
 * @method static string waningCrescentMoon()
 * @method static string crescentMoon()
 * @method static string newMoonFace()
 * @method static string firstQuarterMoonFace()
 * @method static string lastQuarterMoonFace()
 * @method static string thermometer()
 * @method static string sun()
 * @method static string fullMoonFace()
 * @method static string sunWithFace()
 * @method static string ringedPlanet()
 * @method static string star()
 * @method static string glowingStar()
 * @method static string shootingStar()
 * @method static string milkyWay()
 * @method static string cloud()
 * @method static string sunBehindCloud()
 * @method static string cloudWithLightningAndRain()
 * @method static string sunBehindSmallCloud()
 * @method static string sunBehindLargeCloud()
 * @method static string sunBehindRainCloud()
 * @method static string cloudWithRain()
 * @method static string cloudWithSnow()
 * @method static string cloudWithLightning()
 * @method static string tornado()
 * @method static string fog()
 * @method static string windFace()
 * @method static string cyclone()
 * @method static string rainbow()
 * @method static string closedUmbrella()
 * @method static string umbrella()
 * @method static string umbrellaWithRainDrops()
 * @method static string umbrellaOnGround()
 * @method static string highVoltage()
 * @method static string snowflake()
 * @method static string snowman()
 * @method static string snowmanWithoutSnow()
 * @method static string comet()
 * @method static string fire()
 * @method static string droplet()
 * @method static string waterWave()
 * ##### Emoji group: ACTIVITIES #####
 * ##### Emoji subgroup: EVENT #####
 * @method static string jackOLantern()
 * @method static string christmasTree()
 * @method static string fireworks()
 * @method static string sparkler()
 * @method static string firecracker()
 * @method static string sparkles()
 * @method static string balloon()
 * @method static string partyPopper()
 * @method static string confettiBall()
 * @method static string tanabataTree()
 * @method static string pineDecoration()
 * @method static string japaneseDolls()
 * @method static string carpStreamer()
 * @method static string windChime()
 * @method static string moonViewingCeremony()
 * @method static string redEnvelope()
 * @method static string ribbon()
 * @method static string wrappedGift()
 * @method static string reminderRibbon()
 * @method static string admissionTickets()
 * @method static string ticket()
 * ##### Emoji subgroup: AWARD-MEDAL #####
 * @method static string militaryMedal()
 * @method static string trophy()
 * @method static string sportsMedal()
 * @method static string firstPlaceMedal()
 * @method static string secondPlaceMedal()
 * @method static string thirdPlaceMedal()
 * ##### Emoji subgroup: SPORT #####
 * @method static string soccerBall()
 * @method static string baseball()
 * @method static string softball()
 * @method static string basketball()
 * @method static string volleyball()
 * @method static string americanFootball()
 * @method static string rugbyFootball()
 * @method static string tennis()
 * @method static string flyingDisc()
 * @method static string bowling()
 * @method static string cricketGame()
 * @method static string fieldHockey()
 * @method static string iceHockey()
 * @method static string lacrosse()
 * @method static string pingPong()
 * @method static string badminton()
 * @method static string boxingGlove()
 * @method static string martialArtsUniform()
 * @method static string goalNet()
 * @method static string flagInHole()
 * @method static string iceSkate()
 * @method static string fishingPole()
 * @method static string divingMask()
 * @method static string runningShirt()
 * @method static string skis()
 * @method static string sled()
 * @method static string curlingStone()
 * ##### Emoji subgroup: GAME #####
 * @method static string bullseye()
 * @method static string yoYo()
 * @method static string kite()
 * @method static string pool8Ball()
 * @method static string crystalBall()
 * @method static string magicWand()
 * @method static string nazarAmulet()
 * @method static string hamsa()
 * @method static string videoGame()
 * @method static string joystick()
 * @method static string slotMachine()
 * @method static string gameDie()
 * @method static string puzzlePiece()
 * @method static string teddyBear()
 * @method static string pinata()
 * @method static string mirrorBall()
 * @method static string nestingDolls()
 * @method static string spadeSuit()
 * @method static string heartSuit()
 * @method static string diamondSuit()
 * @method static string clubSuit()
 * @method static string chessPawn()
 * @method static string joker()
 * @method static string mahjongRedDragon()
 * @method static string flowerPlayingCards()
 * ##### Emoji subgroup: ARTS & CRAFTS #####
 * @method static string performingArts()
 * @method static string framedPicture()
 * @method static string artistPalette()
 * @method static string thread()
 * @method static string sewingNeedle()
 * @method static string yarn()
 * @method static string knot()
 * ##### Emoji group: OBJECTS #####
 * ##### Emoji subgroup: CLOTHING #####
 * @method static string glasses()
 * @method static string sunglasses()
 * @method static string goggles()
 * @method static string labCoat()
 * @method static string safetyVest()
 * @method static string necktie()
 * @method static string tShirt()
 * @method static string jeans()
 * @method static string scarf()
 * @method static string gloves()
 * @method static string coat()
 * @method static string socks()
 * @method static string dress()
 * @method static string kimono()
 * @method static string sari()
 * @method static string onePieceSwimsuit()
 * @method static string briefs()
 * @method static string shorts()
 * @method static string bikini()
 * @method static string womanSClothes()
 * @method static string purse()
 * @method static string handbag()
 * @method static string clutchBag()
 * @method static string shoppingBags()
 * @method static string backpack()
 * @method static string thongSandal()
 * @method static string manSShoe()
 * @method static string runningShoe()
 * @method static string hikingBoot()
 * @method static string flatShoe()
 * @method static string highHeeledShoe()
 * @method static string womanSSandal()
 * @method static string balletShoes()
 * @method static string womanSBoot()
 * @method static string crown()
 * @method static string womanSHat()
 * @method static string topHat()
 * @method static string graduationCap()
 * @method static string billedCap()
 * @method static string militaryHelmet()
 * @method static string rescueWorkerSHelmet()
 * @method static string prayerBeads()
 * @method static string lipstick()
 * @method static string ring()
 * @method static string gemStone()
 * ##### Emoji subgroup: SOUND #####
 * @method static string mutedSpeaker()
 * @method static string speakerLowVolume()
 * @method static string speakerMediumVolume()
 * @method static string speakerHighVolume()
 * @method static string loudspeaker()
 * @method static string megaphone()
 * @method static string postalHorn()
 * @method static string bell()
 * @method static string bellWithSlash()
 * ##### Emoji subgroup: MUSIC #####
 * @method static string musicalScore()
 * @method static string musicalNote()
 * @method static string musicalNotes()
 * @method static string studioMicrophone()
 * @method static string levelSlider()
 * @method static string controlKnobs()
 * @method static string microphone()
 * @method static string headphone()
 * @method static string radio()
 * ##### Emoji subgroup: MUSICAL-INSTRUMENT #####
 * @method static string saxophone()
 * @method static string accordion()
 * @method static string guitar()
 * @method static string musicalKeyboard()
 * @method static string trumpet()
 * @method static string violin()
 * @method static string banjo()
 * @method static string drum()
 * @method static string longDrum()
 * ##### Emoji subgroup: PHONE #####
 * @method static string mobilePhone()
 * @method static string mobilePhoneWithArrow()
 * @method static string telephone()
 * @method static string telephoneReceiver()
 * @method static string pager()
 * @method static string faxMachine()
 * ##### Emoji subgroup: COMPUTER #####
 * @method static string battery()
 * @method static string lowBattery()
 * @method static string electricPlug()
 * @method static string laptop()
 * @method static string desktopComputer()
 * @method static string printer()
 * @method static string keyboard()
 * @method static string computerMouse()
 * @method static string trackball()
 * @method static string computerDisk()
 * @method static string floppyDisk()
 * @method static string opticalDisk()
 * @method static string dvd()
 * @method static string abacus()
 * ##### Emoji subgroup: LIGHT & VIDEO #####
 * @method static string movieCamera()
 * @method static string filmFrames()
 * @method static string filmProjector()
 * @method static string clapperBoard()
 * @method static string television()
 * @method static string camera()
 * @method static string cameraWithFlash()
 * @method static string videoCamera()
 * @method static string videocassette()
 * @method static string magnifyingGlassTiltedLeft()
 * @method static string magnifyingGlassTiltedRight()
 * @method static string candle()
 * @method static string lightBulb()
 * @method static string flashlight()
 * @method static string redPaperLantern()
 * @method static string diyaLamp()
 * ##### Emoji subgroup: BOOK-PAPER #####
 * @method static string notebookWithDecorativeCover()
 * @method static string closedBook()
 * @method static string openBook()
 * @method static string greenBook()
 * @method static string blueBook()
 * @method static string orangeBook()
 * @method static string books()
 * @method static string notebook()
 * @method static string ledger()
 * @method static string pageWithCurl()
 * @method static string scroll()
 * @method static string pageFacingUp()
 * @method static string newspaper()
 * @method static string rolledUpNewspaper()
 * @method static string bookmarkTabs()
 * @method static string bookmark()
 * @method static string label()
 * ##### Emoji subgroup: MONEY #####
 * @method static string moneyBag()
 * @method static string coin()
 * @method static string yenBanknote()
 * @method static string dollarBanknote()
 * @method static string euroBanknote()
 * @method static string poundBanknote()
 * @method static string moneyWithWings()
 * @method static string creditCard()
 * @method static string receipt()
 * @method static string chartIncreasingWithYen()
 * ##### Emoji subgroup: MAIL #####
 * @method static string envelope()
 * @method static string eMail()
 * @method static string incomingEnvelope()
 * @method static string envelopeWithArrow()
 * @method static string outboxTray()
 * @method static string inboxTray()
 * @method static string package()
 * @method static string closedMailboxWithRaisedFlag()
 * @method static string closedMailboxWithLoweredFlag()
 * @method static string openMailboxWithRaisedFlag()
 * @method static string openMailboxWithLoweredFlag()
 * @method static string postbox()
 * @method static string ballotBoxWithBallot()
 * ##### Emoji subgroup: WRITING #####
 * @method static string pencil()
 * @method static string blackNib()
 * @method static string fountainPen()
 * @method static string pen()
 * @method static string paintbrush()
 * @method static string crayon()
 * @method static string memo()
 * ##### Emoji subgroup: OFFICE #####
 * @method static string briefcase()
 * @method static string fileFolder()
 * @method static string openFileFolder()
 * @method static string cardIndexDividers()
 * @method static string calendar()
 * @method static string tearOffCalendar()
 * @method static string spiralNotepad()
 * @method static string spiralCalendar()
 * @method static string cardIndex()
 * @method static string chartIncreasing()
 * @method static string chartDecreasing()
 * @method static string barChart()
 * @method static string clipboard()
 * @method static string pushpin()
 * @method static string roundPushpin()
 * @method static string paperclip()
 * @method static string linkedPaperclips()
 * @method static string straightRuler()
 * @method static string triangularRuler()
 * @method static string scissors()
 * @method static string cardFileBox()
 * @method static string fileCabinet()
 * @method static string wastebasket()
 * ##### Emoji subgroup: LOCK #####
 * @method static string locked()
 * @method static string unlocked()
 * @method static string lockedWithPen()
 * @method static string lockedWithKey()
 * @method static string key()
 * @method static string oldKey()
 * ##### Emoji subgroup: TOOL #####
 * @method static string hammer()
 * @method static string axe()
 * @method static string pick()
 * @method static string hammerAndPick()
 * @method static string hammerAndWrench()
 * @method static string dagger()
 * @method static string crossedSwords()
 * @method static string waterPistol()
 * @method static string boomerang()
 * @method static string bowAndArrow()
 * @method static string shield()
 * @method static string carpentrySaw()
 * @method static string wrench()
 * @method static string screwdriver()
 * @method static string nutAndBolt()
 * @method static string gear()
 * @method static string clamp()
 * @method static string balanceScale()
 * @method static string whiteCane()
 * @method static string link()
 * @method static string chains()
 * @method static string hook()
 * @method static string toolbox()
 * @method static string magnet()
 * @method static string ladder()
 * ##### Emoji subgroup: SCIENCE #####
 * @method static string alembic()
 * @method static string testTube()
 * @method static string petriDish()
 * @method static string dna()
 * @method static string microscope()
 * @method static string telescope()
 * @method static string satelliteAntenna()
 * ##### Emoji subgroup: MEDICAL #####
 * @method static string syringe()
 * @method static string dropOfBlood()
 * @method static string pill()
 * @method static string adhesiveBandage()
 * @method static string crutch()
 * @method static string stethoscope()
 * @method static string xRay()
 * ##### Emoji subgroup: HOUSEHOLD #####
 * @method static string door()
 * @method static string elevator()
 * @method static string mirror()
 * @method static string window()
 * @method static string bed()
 * @method static string couchAndLamp()
 * @method static string chair()
 * @method static string toilet()
 * @method static string plunger()
 * @method static string shower()
 * @method static string bathtub()
 * @method static string mouseTrap()
 * @method static string razor()
 * @method static string lotionBottle()
 * @method static string safetyPin()
 * @method static string broom()
 * @method static string basket()
 * @method static string rollOfPaper()
 * @method static string bucket()
 * @method static string soap()
 * @method static string bubbles()
 * @method static string toothbrush()
 * @method static string sponge()
 * @method static string fireExtinguisher()
 * @method static string shoppingCart()
 * ##### Emoji subgroup: OTHER-OBJECT #####
 * @method static string cigarette()
 * @method static string coffin()
 * @method static string headstone()
 * @method static string funeralUrn()
 * @method static string moai()
 * @method static string placard()
 * @method static string identificationCard()
 * ##### Emoji group: SYMBOLS #####
 * ##### Emoji subgroup: TRANSPORT-SIGN #####
 * @method static string atmSign()
 * @method static string litterInBinSign()
 * @method static string potableWater()
 * @method static string wheelchairSymbol()
 * @method static string menSRoom()
 * @method static string womenSRoom()
 * @method static string restroom()
 * @method static string babySymbol()
 * @method static string waterCloset()
 * @method static string passportControl()
 * @method static string customs()
 * @method static string baggageClaim()
 * @method static string leftLuggage()
 * ##### Emoji subgroup: WARNING #####
 * @method static string warning()
 * @method static string childrenCrossing()
 * @method static string noEntry()
 * @method static string prohibited()
 * @method static string noBicycles()
 * @method static string noSmoking()
 * @method static string noLittering()
 * @method static string nonPotableWater()
 * @method static string noPedestrians()
 * @method static string noMobilePhones()
 * @method static string noOneUnderEighteen()
 * @method static string radioactive()
 * @method static string biohazard()
 * ##### Emoji subgroup: ARROW #####
 * @method static string upArrow()
 * @method static string upRightArrow()
 * @method static string rightArrow()
 * @method static string downRightArrow()
 * @method static string downArrow()
 * @method static string downLeftArrow()
 * @method static string leftArrow()
 * @method static string upLeftArrow()
 * @method static string upDownArrow()
 * @method static string leftRightArrow()
 * @method static string rightArrowCurvingLeft()
 * @method static string leftArrowCurvingRight()
 * @method static string rightArrowCurvingUp()
 * @method static string rightArrowCurvingDown()
 * @method static string clockwiseVerticalArrows()
 * @method static string counterclockwiseArrowsButton()
 * @method static string backArrow()
 * @method static string endArrow()
 * @method static string onArrow()
 * @method static string soonArrow()
 * @method static string topArrow()
 * ##### Emoji subgroup: RELIGION #####
 * @method static string placeOfWorship()
 * @method static string atomSymbol()
 * @method static string om()
 * @method static string starOfDavid()
 * @method static string wheelOfDharma()
 * @method static string yinYang()
 * @method static string latinCross()
 * @method static string orthodoxCross()
 * @method static string starAndCrescent()
 * @method static string peaceSymbol()
 * @method static string menorah()
 * @method static string dottedSixPointedStar()
 * ##### Emoji subgroup: ZODIAC #####
 * @method static string aries()
 * @method static string taurus()
 * @method static string gemini()
 * @method static string cancer()
 * @method static string leo()
 * @method static string virgo()
 * @method static string libra()
 * @method static string scorpio()
 * @method static string sagittarius()
 * @method static string capricorn()
 * @method static string aquarius()
 * @method static string pisces()
 * @method static string ophiuchus()
 * ##### Emoji subgroup: AV-SYMBOL #####
 * @method static string shuffleTracksButton()
 * @method static string repeatButton()
 * @method static string repeatSingleButton()
 * @method static string playButton()
 * @method static string fastForwardButton()
 * @method static string nextTrackButton()
 * @method static string playOrPauseButton()
 * @method static string reverseButton()
 * @method static string fastReverseButton()
 * @method static string lastTrackButton()
 * @method static string upwardsButton()
 * @method static string fastUpButton()
 * @method static string downwardsButton()
 * @method static string fastDownButton()
 * @method static string pauseButton()
 * @method static string stopButton()
 * @method static string recordButton()
 * @method static string ejectButton()
 * @method static string cinema()
 * @method static string dimButton()
 * @method static string brightButton()
 * @method static string antennaBars()
 * @method static string vibrationMode()
 * @method static string mobilePhoneOff()
 * ##### Emoji subgroup: GENDER #####
 * @method static string femaleSign()
 * @method static string maleSign()
 * @method static string transgenderSymbol()
 * ##### Emoji subgroup: MATH #####
 * @method static string multiply()
 * @method static string plus()
 * @method static string minus()
 * @method static string divide()
 * @method static string heavyEqualsSign()
 * @method static string infinity()
 * ##### Emoji subgroup: PUNCTUATION #####
 * @method static string doubleExclamationMark()
 * @method static string exclamationQuestionMark()
 * @method static string redQuestionMark()
 * @method static string whiteQuestionMark()
 * @method static string whiteExclamationMark()
 * @method static string redExclamationMark()
 * @method static string wavyDash()
 * ##### Emoji subgroup: CURRENCY #####
 * @method static string currencyExchange()
 * @method static string heavyDollarSign()
 * ##### Emoji subgroup: OTHER-SYMBOL #####
 * @method static string medicalSymbol()
 * @method static string recyclingSymbol()
 * @method static string fleurDeLis()
 * @method static string tridentEmblem()
 * @method static string nameBadge()
 * @method static string japaneseSymbolForBeginner()
 * @method static string hollowRedCircle()
 * @method static string checkMarkButton()
 * @method static string checkBoxWithCheck()
 * @method static string checkMark()
 * @method static string crossMark()
 * @method static string crossMarkButton()
 * @method static string curlyLoop()
 * @method static string doubleCurlyLoop()
 * @method static string partAlternationMark()
 * @method static string eightSpokedAsterisk()
 * @method static string eightPointedStar()
 * @method static string sparkle()
 * @method static string copyright()
 * @method static string registered()
 * @method static string tradeMark()
 * ##### Emoji subgroup: KEYCAP #####
 * @method static string keycapHash()
 * @method static string keycapAsterisk()
 * @method static string keycap0()
 * @method static string keycap1()
 * @method static string keycap2()
 * @method static string keycap3()
 * @method static string keycap4()
 * @method static string keycap5()
 * @method static string keycap6()
 * @method static string keycap7()
 * @method static string keycap8()
 * @method static string keycap9()
 * @method static string keycap10()
 * ##### Emoji subgroup: ALPHANUM #####
 * @method static string inputLatinUppercase()
 * @method static string inputLatinLowercase()
 * @method static string inputNumbers()
 * @method static string inputSymbols()
 * @method static string inputLatinLetters()
 * @method static string aButtonBloodType()
 * @method static string abButtonBloodType()
 * @method static string bButtonBloodType()
 * @method static string clButton()
 * @method static string coolButton()
 * @method static string freeButton()
 * @method static string information()
 * @method static string idButton()
 * @method static string circledM()
 * @method static string newButton()
 * @method static string ngButton()
 * @method static string oButtonBloodType()
 * @method static string okButton()
 * @method static string pButton()
 * @method static string sosButton()
 * @method static string upButton()
 * @method static string vsButton()
 * @method static string japaneseHereButton()
 * @method static string japaneseServiceChargeButton()
 * @method static string japaneseMonthlyAmountButton()
 * @method static string japaneseNotFreeOfChargeButton()
 * @method static string japaneseReservedButton()
 * @method static string japaneseBargainButton()
 * @method static string japaneseDiscountButton()
 * @method static string japaneseFreeOfChargeButton()
 * @method static string japaneseProhibitedButton()
 * @method static string japaneseAcceptableButton()
 * @method static string japaneseApplicationButton()
 * @method static string japanesePassingGradeButton()
 * @method static string japaneseVacancyButton()
 * @method static string japaneseCongratulationsButton()
 * @method static string japaneseSecretButton()
 * @method static string japaneseOpenForBusinessButton()
 * @method static string japaneseNoVacancyButton()
 * ##### Emoji subgroup: GEOMETRIC #####
 * @method static string redCircle()
 * @method static string orangeCircle()
 * @method static string yellowCircle()
 * @method static string greenCircle()
 * @method static string blueCircle()
 * @method static string purpleCircle()
 * @method static string brownCircle()
 * @method static string blackCircle()
 * @method static string whiteCircle()
 * @method static string redSquare()
 * @method static string orangeSquare()
 * @method static string yellowSquare()
 * @method static string greenSquare()
 * @method static string blueSquare()
 * @method static string purpleSquare()
 * @method static string brownSquare()
 * @method static string blackLargeSquare()
 * @method static string whiteLargeSquare()
 * @method static string blackMediumSquare()
 * @method static string whiteMediumSquare()
 * @method static string blackMediumSmallSquare()
 * @method static string whiteMediumSmallSquare()
 * @method static string blackSmallSquare()
 * @method static string whiteSmallSquare()
 * @method static string largeOrangeDiamond()
 * @method static string largeBlueDiamond()
 * @method static string smallOrangeDiamond()
 * @method static string smallBlueDiamond()
 * @method static string redTrianglePointedUp()
 * @method static string redTrianglePointedDown()
 * @method static string diamondWithADot()
 * @method static string radioButton()
 * @method static string whiteSquareButton()
 * @method static string blackSquareButton()
 * ##### Emoji group: FLAGS #####
 * ##### Emoji subgroup: FLAG #####
 * @method static string chequeredFlag()
 * @method static string triangularFlag()
 * @method static string crossedFlags()
 * @method static string blackFlag()
 * @method static string whiteFlag()
 * @method static string rainbowFlag()
 * @method static string transgenderFlag()
 * @method static string pirateFlag()
 * ##### Emoji subgroup: COUNTRY-FLAG #####
 * @method static string flagsForFlagAscensionIsland()
 * @method static string flagsForFlagAndorra()
 * @method static string flagsForFlagUnitedArabEmirates()
 * @method static string flagsForFlagAfghanistan()
 * @method static string flagsForFlagAntiguaAndBarbuda()
 * @method static string flagsForFlagAnguilla()
 * @method static string flagsForFlagAlbania()
 * @method static string flagsForFlagArmenia()
 * @method static string flagsForFlagAngola()
 * @method static string flagsForFlagAntarctica()
 * @method static string flagsForFlagArgentina()
 * @method static string flagsForFlagAmericanSamoa()
 * @method static string flagsForFlagAustria()
 * @method static string flagsForFlagAustralia()
 * @method static string flagsForFlagAruba()
 * @method static string flagsForFlagAlandIslands()
 * @method static string flagsForFlagAzerbaijan()
 * @method static string flagsForFlagBosniaAndHerzegovina()
 * @method static string flagsForFlagBarbados()
 * @method static string flagsForFlagBangladesh()
 * @method static string flagsForFlagBelgium()
 * @method static string flagsForFlagBurkinaFaso()
 * @method static string flagsForFlagBulgaria()
 * @method static string flagsForFlagBahrain()
 * @method static string flagsForFlagBurundi()
 * @method static string flagsForFlagBenin()
 * @method static string flagsForFlagStBarthelemy()
 * @method static string flagsForFlagBermuda()
 * @method static string flagsForFlagBrunei()
 * @method static string flagsForFlagBolivia()
 * @method static string flagsForFlagCaribbeanNetherlands()
 * @method static string flagsForFlagBrazil()
 * @method static string flagsForFlagBahamas()
 * @method static string flagsForFlagBhutan()
 * @method static string flagsForFlagBouvetIsland()
 * @method static string flagsForFlagBotswana()
 * @method static string flagsForFlagBelarus()
 * @method static string flagsForFlagBelize()
 * @method static string flagsForFlagCanada()
 * @method static string flagsForFlagCocosKeelingIslands()
 * @method static string flagsForFlagCongoKinshasa()
 * @method static string flagsForFlagCentralAfricanRepublic()
 * @method static string flagsForFlagCongoBrazzaville()
 * @method static string flagsForFlagSwitzerland()
 * @method static string flagsForFlagCoteDIvoire()
 * @method static string flagsForFlagCookIslands()
 * @method static string flagsForFlagChile()
 * @method static string flagsForFlagCameroon()
 * @method static string flagsForFlagChina()
 * @method static string flagsForFlagColombia()
 * @method static string flagsForFlagClippertonIsland()
 * @method static string flagsForFlagCostaRica()
 * @method static string flagsForFlagCuba()
 * @method static string flagsForFlagCapeVerde()
 * @method static string flagsForFlagCuracao()
 * @method static string flagsForFlagChristmasIsland()
 * @method static string flagsForFlagCyprus()
 * @method static string flagsForFlagCzechia()
 * @method static string flagsForFlagGermany()
 * @method static string flagsForFlagDiegoGarcia()
 * @method static string flagsForFlagDjibouti()
 * @method static string flagsForFlagDenmark()
 * @method static string flagsForFlagDominica()
 * @method static string flagsForFlagDominicanRepublic()
 * @method static string flagsForFlagAlgeria()
 * @method static string flagsForFlagCeutaAndMelilla()
 * @method static string flagsForFlagEcuador()
 * @method static string flagsForFlagEstonia()
 * @method static string flagsForFlagEgypt()
 * @method static string flagsForFlagWesternSahara()
 * @method static string flagsForFlagEritrea()
 * @method static string flagsForFlagSpain()
 * @method static string flagsForFlagEthiopia()
 * @method static string flagsForFlagEuropeanUnion()
 * @method static string flagsForFlagFinland()
 * @method static string flagsForFlagFiji()
 * @method static string flagsForFlagFalklandIslands()
 * @method static string flagsForFlagMicronesia()
 * @method static string flagsForFlagFaroeIslands()
 * @method static string flagsForFlagFrance()
 * @method static string flagsForFlagGabon()
 * @method static string flagsForFlagUnitedKingdom()
 * @method static string flagsForFlagGrenada()
 * @method static string flagsForFlagGeorgia()
 * @method static string flagsForFlagFrenchGuiana()
 * @method static string flagsForFlagGuernsey()
 * @method static string flagsForFlagGhana()
 * @method static string flagsForFlagGibraltar()
 * @method static string flagsForFlagGreenland()
 * @method static string flagsForFlagGambia()
 * @method static string flagsForFlagGuinea()
 * @method static string flagsForFlagGuadeloupe()
 * @method static string flagsForFlagEquatorialGuinea()
 * @method static string flagsForFlagGreece()
 * @method static string flagsForFlagSouthGeorgiaAndSouthSandwichIslands()
 * @method static string flagsForFlagGuatemala()
 * @method static string flagsForFlagGuam()
 * @method static string flagsForFlagGuineaBissau()
 * @method static string flagsForFlagGuyana()
 * @method static string flagsForFlagHongKongSarChina()
 * @method static string flagsForFlagHeardAndMcdonaldIslands()
 * @method static string flagsForFlagHonduras()
 * @method static string flagsForFlagCroatia()
 * @method static string flagsForFlagHaiti()
 * @method static string flagsForFlagHungary()
 * @method static string flagsForFlagCanaryIslands()
 * @method static string flagsForFlagIndonesia()
 * @method static string flagsForFlagIreland()
 * @method static string flagsForFlagIsrael()
 * @method static string flagsForFlagIsleOfMan()
 * @method static string flagsForFlagIndia()
 * @method static string flagsForFlagBritishIndianOceanTerritory()
 * @method static string flagsForFlagIraq()
 * @method static string flagsForFlagIran()
 * @method static string flagsForFlagIceland()
 * @method static string flagsForFlagItaly()
 * @method static string flagsForFlagJersey()
 * @method static string flagsForFlagJamaica()
 * @method static string flagsForFlagJordan()
 * @method static string flagsForFlagJapan()
 * @method static string flagsForFlagKenya()
 * @method static string flagsForFlagKyrgyzstan()
 * @method static string flagsForFlagCambodia()
 * @method static string flagsForFlagKiribati()
 * @method static string flagsForFlagComoros()
 * @method static string flagsForFlagStKittsAndNevis()
 * @method static string flagsForFlagNorthKorea()
 * @method static string flagsForFlagSouthKorea()
 * @method static string flagsForFlagKuwait()
 * @method static string flagsForFlagCaymanIslands()
 * @method static string flagsForFlagKazakhstan()
 * @method static string flagsForFlagLaos()
 * @method static string flagsForFlagLebanon()
 * @method static string flagsForFlagStLucia()
 * @method static string flagsForFlagLiechtenstein()
 * @method static string flagsForFlagSriLanka()
 * @method static string flagsForFlagLiberia()
 * @method static string flagsForFlagLesotho()
 * @method static string flagsForFlagLithuania()
 * @method static string flagsForFlagLuxembourg()
 * @method static string flagsForFlagLatvia()
 * @method static string flagsForFlagLibya()
 * @method static string flagsForFlagMorocco()
 * @method static string flagsForFlagMonaco()
 * @method static string flagsForFlagMoldova()
 * @method static string flagsForFlagMontenegro()
 * @method static string flagsForFlagStMartin()
 * @method static string flagsForFlagMadagascar()
 * @method static string flagsForFlagMarshallIslands()
 * @method static string flagsForFlagNorthMacedonia()
 * @method static string flagsForFlagMali()
 * @method static string flagsForFlagMyanmarBurma()
 * @method static string flagsForFlagMongolia()
 * @method static string flagsForFlagMacaoSarChina()
 * @method static string flagsForFlagNorthernMarianaIslands()
 * @method static string flagsForFlagMartinique()
 * @method static string flagsForFlagMauritania()
 * @method static string flagsForFlagMontserrat()
 * @method static string flagsForFlagMalta()
 * @method static string flagsForFlagMauritius()
 * @method static string flagsForFlagMaldives()
 * @method static string flagsForFlagMalawi()
 * @method static string flagsForFlagMexico()
 * @method static string flagsForFlagMalaysia()
 * @method static string flagsForFlagMozambique()
 * @method static string flagsForFlagNamibia()
 * @method static string flagsForFlagNewCaledonia()
 * @method static string flagsForFlagNiger()
 * @method static string flagsForFlagNorfolkIsland()
 * @method static string flagsForFlagNigeria()
 * @method static string flagsForFlagNicaragua()
 * @method static string flagsForFlagNetherlands()
 * @method static string flagsForFlagNorway()
 * @method static string flagsForFlagNepal()
 * @method static string flagsForFlagNauru()
 * @method static string flagsForFlagNiue()
 * @method static string flagsForFlagNewZealand()
 * @method static string flagsForFlagOman()
 * @method static string flagsForFlagPanama()
 * @method static string flagsForFlagPeru()
 * @method static string flagsForFlagFrenchPolynesia()
 * @method static string flagsForFlagPapuaNewGuinea()
 * @method static string flagsForFlagPhilippines()
 * @method static string flagsForFlagPakistan()
 * @method static string flagsForFlagPoland()
 * @method static string flagsForFlagStPierreAndMiquelon()
 * @method static string flagsForFlagPitcairnIslands()
 * @method static string flagsForFlagPuertoRico()
 * @method static string flagsForFlagPalestinianTerritories()
 * @method static string flagsForFlagPortugal()
 * @method static string flagsForFlagPalau()
 * @method static string flagsForFlagParaguay()
 * @method static string flagsForFlagQatar()
 * @method static string flagsForFlagReunion()
 * @method static string flagsForFlagRomania()
 * @method static string flagsForFlagSerbia()
 * @method static string flagsForFlagRussia()
 * @method static string flagsForFlagRwanda()
 * @method static string flagsForFlagSaudiArabia()
 * @method static string flagsForFlagSolomonIslands()
 * @method static string flagsForFlagSeychelles()
 * @method static string flagsForFlagSudan()
 * @method static string flagsForFlagSweden()
 * @method static string flagsForFlagSingapore()
 * @method static string flagsForFlagStHelena()
 * @method static string flagsForFlagSlovenia()
 * @method static string flagsForFlagSvalbardAndJanMayen()
 * @method static string flagsForFlagSlovakia()
 * @method static string flagsForFlagSierraLeone()
 * @method static string flagsForFlagSanMarino()
 * @method static string flagsForFlagSenegal()
 * @method static string flagsForFlagSomalia()
 * @method static string flagsForFlagSuriname()
 * @method static string flagsForFlagSouthSudan()
 * @method static string flagsForFlagSaoTomeAndPrincipe()
 * @method static string flagsForFlagElSalvador()
 * @method static string flagsForFlagSintMaarten()
 * @method static string flagsForFlagSyria()
 * @method static string flagsForFlagEswatini()
 * @method static string flagsForFlagTristanDaCunha()
 * @method static string flagsForFlagTurksAndCaicosIslands()
 * @method static string flagsForFlagChad()
 * @method static string flagsForFlagFrenchSouthernTerritories()
 * @method static string flagsForFlagTogo()
 * @method static string flagsForFlagThailand()
 * @method static string flagsForFlagTajikistan()
 * @method static string flagsForFlagTokelau()
 * @method static string flagsForFlagTimorLeste()
 * @method static string flagsForFlagTurkmenistan()
 * @method static string flagsForFlagTunisia()
 * @method static string flagsForFlagTonga()
 * @method static string flagsForFlagTurkey()
 * @method static string flagsForFlagTrinidadAndTobago()
 * @method static string flagsForFlagTuvalu()
 * @method static string flagsForFlagTaiwan()
 * @method static string flagsForFlagTanzania()
 * @method static string flagsForFlagUkraine()
 * @method static string flagsForFlagUganda()
 * @method static string flagsForFlagUsOutlyingIslands()
 * @method static string flagsForFlagUnitedNations()
 * @method static string flagsForFlagUnitedStates()
 * @method static string flagsForFlagUruguay()
 * @method static string flagsForFlagUzbekistan()
 * @method static string flagsForFlagVaticanCity()
 * @method static string flagsForFlagStVincentAndGrenadines()
 * @method static string flagsForFlagVenezuela()
 * @method static string flagsForFlagBritishVirginIslands()
 * @method static string flagsForFlagUsVirginIslands()
 * @method static string flagsForFlagVietnam()
 * @method static string flagsForFlagVanuatu()
 * @method static string flagsForFlagWallisAndFutuna()
 * @method static string flagsForFlagSamoa()
 * @method static string flagsForFlagKosovo()
 * @method static string flagsForFlagYemen()
 * @method static string flagsForFlagMayotte()
 * @method static string flagsForFlagSouthAfrica()
 * @method static string flagsForFlagZambia()
 * @method static string flagsForFlagZimbabwe()
 * ##### Emoji subgroup: SUBDIVISION-FLAG #####
 * @method static string flagsForFlagEngland()
 * @method static string flagsForFlagScotland()
 * @method static string flagsForFlagWales()
 */
class Emoji
{
    // ##### Emoji group: SMILEYS & EMOTION #####
    // ##### Emoji subgroup: FACE-SMILING #####
    const CHARACTER_GRINNING_FACE = "\u{1F600}";
    const CHARACTER_GRINNING_FACE_WITH_BIG_EYES = "\u{1F603}";
    const CHARACTER_GRINNING_FACE_WITH_SMILING_EYES = "\u{1F604}";
    const CHARACTER_BEAMING_FACE_WITH_SMILING_EYES = "\u{1F601}";
    const CHARACTER_GRINNING_SQUINTING_FACE = "\u{1F606}";
    const CHARACTER_GRINNING_FACE_WITH_SWEAT = "\u{1F605}";
    const CHARACTER_ROLLING_ON_THE_FLOOR_LAUGHING = "\u{1F923}";
    const CHARACTER_FACE_WITH_TEARS_OF_JOY = "\u{1F602}";
    const CHARACTER_SLIGHTLY_SMILING_FACE = "\u{1F642}";
    const CHARACTER_UPSIDE_DOWN_FACE = "\u{1F643}";
    const CHARACTER_MELTING_FACE = "\u{1FAE0}";
    const CHARACTER_WINKING_FACE = "\u{1F609}";
    const CHARACTER_SMILING_FACE_WITH_SMILING_EYES = "\u{1F60A}";
    const CHARACTER_SMILING_FACE_WITH_HALO = "\u{1F607}";
    // ##### Emoji subgroup: FACE-AFFECTION #####
    const CHARACTER_SMILING_FACE_WITH_HEARTS = "\u{1F970}";
    const CHARACTER_SMILING_FACE_WITH_HEART_EYES = "\u{1F60D}";
    const CHARACTER_STAR_STRUCK = "\u{1F929}";
    const CHARACTER_FACE_BLOWING_A_KISS = "\u{1F618}";
    const CHARACTER_KISSING_FACE = "\u{1F617}";
    const CHARACTER_SMILING_FACE = "\u{263A}\u{FE0F}";
    const CHARACTER_KISSING_FACE_WITH_CLOSED_EYES = "\u{1F61A}";
    const CHARACTER_KISSING_FACE_WITH_SMILING_EYES = "\u{1F619}";
    const CHARACTER_SMILING_FACE_WITH_TEAR = "\u{1F972}";
    // ##### Emoji subgroup: FACE-TONGUE #####
    const CHARACTER_FACE_SAVORING_FOOD = "\u{1F60B}";
    const CHARACTER_FACE_WITH_TONGUE = "\u{1F61B}";
    const CHARACTER_WINKING_FACE_WITH_TONGUE = "\u{1F61C}";
    const CHARACTER_ZANY_FACE = "\u{1F92A}";
    const CHARACTER_SQUINTING_FACE_WITH_TONGUE = "\u{1F61D}";
    const CHARACTER_MONEY_MOUTH_FACE = "\u{1F911}";
    // ##### Emoji subgroup: FACE-HAND #####
    const CHARACTER_SMILING_FACE_WITH_OPEN_HANDS = "\u{1F917}";
    const CHARACTER_FACE_WITH_HAND_OVER_MOUTH = "\u{1F92D}";
    const CHARACTER_FACE_WITH_OPEN_EYES_AND_HAND_OVER_MOUTH = "\u{1FAE2}";
    const CHARACTER_FACE_WITH_PEEKING_EYE = "\u{1FAE3}";
    const CHARACTER_SHUSHING_FACE = "\u{1F92B}";
    const CHARACTER_THINKING_FACE = "\u{1F914}";
    const CHARACTER_SALUTING_FACE = "\u{1FAE1}";
    // ##### Emoji subgroup: FACE-NEUTRAL-SKEPTICAL #####
    const CHARACTER_ZIPPER_MOUTH_FACE = "\u{1F910}";
    const CHARACTER_FACE_WITH_RAISED_EYEBROW = "\u{1F928}";
    const CHARACTER_NEUTRAL_FACE = "\u{1F610}";
    const CHARACTER_EXPRESSIONLESS_FACE = "\u{1F611}";
    const CHARACTER_FACE_WITHOUT_MOUTH = "\u{1F636}";
    const CHARACTER_DOTTED_LINE_FACE = "\u{1FAE5}";
    const CHARACTER_FACE_IN_CLOUDS = "\u{1F636}\u{200D}\u{1F32B}\u{FE0F}";
    const CHARACTER_SMIRKING_FACE = "\u{1F60F}";
    const CHARACTER_UNAMUSED_FACE = "\u{1F612}";
    const CHARACTER_FACE_WITH_ROLLING_EYES = "\u{1F644}";
    const CHARACTER_GRIMACING_FACE = "\u{1F62C}";
    const CHARACTER_FACE_EXHALING = "\u{1F62E}\u{200D}\u{1F4A8}";
    const CHARACTER_LYING_FACE = "\u{1F925}";
    // ##### Emoji subgroup: FACE-SLEEPY #####
    const CHARACTER_RELIEVED_FACE = "\u{1F60C}";
    const CHARACTER_PENSIVE_FACE = "\u{1F614}";
    const CHARACTER_SLEEPY_FACE = "\u{1F62A}";
    const CHARACTER_DROOLING_FACE = "\u{1F924}";
    const CHARACTER_SLEEPING_FACE = "\u{1F634}";
    // ##### Emoji subgroup: FACE-UNWELL #####
    const CHARACTER_FACE_WITH_MEDICAL_MASK = "\u{1F637}";
    const CHARACTER_FACE_WITH_THERMOMETER = "\u{1F912}";
    const CHARACTER_FACE_WITH_HEAD_BANDAGE = "\u{1F915}";
    const CHARACTER_NAUSEATED_FACE = "\u{1F922}";
    const CHARACTER_FACE_VOMITING = "\u{1F92E}";
    const CHARACTER_SNEEZING_FACE = "\u{1F927}";
    const CHARACTER_HOT_FACE = "\u{1F975}";
    const CHARACTER_COLD_FACE = "\u{1F976}";
    const CHARACTER_WOOZY_FACE = "\u{1F974}";
    const CHARACTER_FACE_WITH_CROSSED_OUT_EYES = "\u{1F635}";
    const CHARACTER_FACE_WITH_SPIRAL_EYES = "\u{1F635}\u{200D}\u{1F4AB}";
    const CHARACTER_EXPLODING_HEAD = "\u{1F92F}";
    // ##### Emoji subgroup: FACE-HAT #####
    const CHARACTER_COWBOY_HAT_FACE = "\u{1F920}";
    const CHARACTER_PARTYING_FACE = "\u{1F973}";
    const CHARACTER_DISGUISED_FACE = "\u{1F978}";
    // ##### Emoji subgroup: FACE-GLASSES #####
    const CHARACTER_SMILING_FACE_WITH_SUNGLASSES = "\u{1F60E}";
    const CHARACTER_NERD_FACE = "\u{1F913}";
    const CHARACTER_FACE_WITH_MONOCLE = "\u{1F9D0}";
    // ##### Emoji subgroup: FACE-CONCERNED #####
    const CHARACTER_CONFUSED_FACE = "\u{1F615}";
    const CHARACTER_FACE_WITH_DIAGONAL_MOUTH = "\u{1FAE4}";
    const CHARACTER_WORRIED_FACE = "\u{1F61F}";
    const CHARACTER_SLIGHTLY_FROWNING_FACE = "\u{1F641}";
    const CHARACTER_FROWNING_FACE = "\u{2639}\u{FE0F}";
    const CHARACTER_FACE_WITH_OPEN_MOUTH = "\u{1F62E}";
    const CHARACTER_HUSHED_FACE = "\u{1F62F}";
    const CHARACTER_ASTONISHED_FACE = "\u{1F632}";
    const CHARACTER_FLUSHED_FACE = "\u{1F633}";
    const CHARACTER_PLEADING_FACE = "\u{1F97A}";
    const CHARACTER_FACE_HOLDING_BACK_TEARS = "\u{1F979}";
    const CHARACTER_FROWNING_FACE_WITH_OPEN_MOUTH = "\u{1F626}";
    const CHARACTER_ANGUISHED_FACE = "\u{1F627}";
    const CHARACTER_FEARFUL_FACE = "\u{1F628}";
    const CHARACTER_ANXIOUS_FACE_WITH_SWEAT = "\u{1F630}";
    const CHARACTER_SAD_BUT_RELIEVED_FACE = "\u{1F625}";
    const CHARACTER_CRYING_FACE = "\u{1F622}";
    const CHARACTER_LOUDLY_CRYING_FACE = "\u{1F62D}";
    const CHARACTER_FACE_SCREAMING_IN_FEAR = "\u{1F631}";
    const CHARACTER_CONFOUNDED_FACE = "\u{1F616}";
    const CHARACTER_PERSEVERING_FACE = "\u{1F623}";
    const CHARACTER_DISAPPOINTED_FACE = "\u{1F61E}";
    const CHARACTER_DOWNCAST_FACE_WITH_SWEAT = "\u{1F613}";
    const CHARACTER_WEARY_FACE = "\u{1F629}";
    const CHARACTER_TIRED_FACE = "\u{1F62B}";
    const CHARACTER_YAWNING_FACE = "\u{1F971}";
    // ##### Emoji subgroup: FACE-NEGATIVE #####
    const CHARACTER_FACE_WITH_STEAM_FROM_NOSE = "\u{1F624}";
    const CHARACTER_POUTING_FACE = "\u{1F621}";
    const CHARACTER_ANGRY_FACE = "\u{1F620}";
    const CHARACTER_FACE_WITH_SYMBOLS_ON_MOUTH = "\u{1F92C}";
    const CHARACTER_SMILING_FACE_WITH_HORNS = "\u{1F608}";
    const CHARACTER_ANGRY_FACE_WITH_HORNS = "\u{1F47F}";
    const CHARACTER_SKULL = "\u{1F480}";
    const CHARACTER_SKULL_AND_CROSSBONES = "\u{2620}\u{FE0F}";
    // ##### Emoji subgroup: FACE-COSTUME #####
    const CHARACTER_PILE_OF_POO = "\u{1F4A9}";
    const CHARACTER_CLOWN_FACE = "\u{1F921}";
    const CHARACTER_OGRE = "\u{1F479}";
    const CHARACTER_GOBLIN = "\u{1F47A}";
    const CHARACTER_GHOST = "\u{1F47B}";
    const CHARACTER_ALIEN = "\u{1F47D}";
    const CHARACTER_ALIEN_MONSTER = "\u{1F47E}";
    const CHARACTER_ROBOT = "\u{1F916}";
    // ##### Emoji subgroup: CAT-FACE #####
    const CHARACTER_GRINNING_CAT = "\u{1F63A}";
    const CHARACTER_GRINNING_CAT_WITH_SMILING_EYES = "\u{1F638}";
    const CHARACTER_CAT_WITH_TEARS_OF_JOY = "\u{1F639}";
    const CHARACTER_SMILING_CAT_WITH_HEART_EYES = "\u{1F63B}";
    const CHARACTER_CAT_WITH_WRY_SMILE = "\u{1F63C}";
    const CHARACTER_KISSING_CAT = "\u{1F63D}";
    const CHARACTER_WEARY_CAT = "\u{1F640}";
    const CHARACTER_CRYING_CAT = "\u{1F63F}";
    const CHARACTER_POUTING_CAT = "\u{1F63E}";
    // ##### Emoji subgroup: MONKEY-FACE #####
    const CHARACTER_SEE_NO_EVIL_MONKEY = "\u{1F648}";
    const CHARACTER_HEAR_NO_EVIL_MONKEY = "\u{1F649}";
    const CHARACTER_SPEAK_NO_EVIL_MONKEY = "\u{1F64A}";
    // ##### Emoji subgroup: EMOTION #####
    const CHARACTER_KISS_MARK = "\u{1F48B}";
    const CHARACTER_LOVE_LETTER = "\u{1F48C}";
    const CHARACTER_HEART_WITH_ARROW = "\u{1F498}";
    const CHARACTER_HEART_WITH_RIBBON = "\u{1F49D}";
    const CHARACTER_SPARKLING_HEART = "\u{1F496}";
    const CHARACTER_GROWING_HEART = "\u{1F497}";
    const CHARACTER_BEATING_HEART = "\u{1F493}";
    const CHARACTER_REVOLVING_HEARTS = "\u{1F49E}";
    const CHARACTER_TWO_HEARTS = "\u{1F495}";
    const CHARACTER_HEART_DECORATION = "\u{1F49F}";
    const CHARACTER_HEART_EXCLAMATION = "\u{2763}\u{FE0F}";
    const CHARACTER_BROKEN_HEART = "\u{1F494}";
    const CHARACTER_HEART_ON_FIRE = "\u{2764}\u{FE0F}\u{200D}\u{1F525}";
    const CHARACTER_MENDING_HEART = "\u{2764}\u{FE0F}\u{200D}\u{1FA79}";
    const CHARACTER_RED_HEART = "\u{2764}\u{FE0F}";
    const CHARACTER_ORANGE_HEART = "\u{1F9E1}";
    const CHARACTER_YELLOW_HEART = "\u{1F49B}";
    const CHARACTER_GREEN_HEART = "\u{1F49A}";
    const CHARACTER_BLUE_HEART = "\u{1F499}";
    const CHARACTER_PURPLE_HEART = "\u{1F49C}";
    const CHARACTER_BROWN_HEART = "\u{1F90E}";
    const CHARACTER_BLACK_HEART = "\u{1F5A4}";
    const CHARACTER_WHITE_HEART = "\u{1F90D}";
    const CHARACTER_HUNDRED_POINTS = "\u{1F4AF}";
    const CHARACTER_ANGER_SYMBOL = "\u{1F4A2}";
    const CHARACTER_COLLISION = "\u{1F4A5}";
    const CHARACTER_DIZZY = "\u{1F4AB}";
    const CHARACTER_SWEAT_DROPLETS = "\u{1F4A6}";
    const CHARACTER_DASHING_AWAY = "\u{1F4A8}";
    const CHARACTER_HOLE = "\u{1F573}\u{FE0F}";
    const CHARACTER_BOMB = "\u{1F4A3}";
    const CHARACTER_SPEECH_BALLOON = "\u{1F4AC}";
    const CHARACTER_EYE_IN_SPEECH_BUBBLE = "\u{1F441}\u{FE0F}\u{200D}\u{1F5E8}\u{FE0F}";
    const CHARACTER_LEFT_SPEECH_BUBBLE = "\u{1F5E8}\u{FE0F}";
    const CHARACTER_RIGHT_ANGER_BUBBLE = "\u{1F5EF}\u{FE0F}";
    const CHARACTER_THOUGHT_BALLOON = "\u{1F4AD}";
    const CHARACTER_ZZZ = "\u{1F4A4}";
    // ##### Emoji group: PEOPLE & BODY #####
    // ##### Emoji subgroup: HAND-FINGERS-OPEN #####
    const CHARACTER_WAVING_HAND = "\u{1F44B}";
    const CHARACTER_WAVING_HAND_LIGHT_SKIN_TONE = "\u{1F44B}\u{1F3FB}";
    const CHARACTER_WAVING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F44B}\u{1F3FC}";
    const CHARACTER_WAVING_HAND_MEDIUM_SKIN_TONE = "\u{1F44B}\u{1F3FD}";
    const CHARACTER_WAVING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F44B}\u{1F3FE}";
    const CHARACTER_WAVING_HAND_DARK_SKIN_TONE = "\u{1F44B}\u{1F3FF}";
    const CHARACTER_RAISED_BACK_OF_HAND = "\u{1F91A}";
    const CHARACTER_RAISED_BACK_OF_HAND_LIGHT_SKIN_TONE = "\u{1F91A}\u{1F3FB}";
    const CHARACTER_RAISED_BACK_OF_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F91A}\u{1F3FC}";
    const CHARACTER_RAISED_BACK_OF_HAND_MEDIUM_SKIN_TONE = "\u{1F91A}\u{1F3FD}";
    const CHARACTER_RAISED_BACK_OF_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F91A}\u{1F3FE}";
    const CHARACTER_RAISED_BACK_OF_HAND_DARK_SKIN_TONE = "\u{1F91A}\u{1F3FF}";
    const CHARACTER_HAND_WITH_FINGERS_SPLAYED = "\u{1F590}\u{FE0F}";
    const CHARACTER_HAND_WITH_FINGERS_SPLAYED_LIGHT_SKIN_TONE = "\u{1F590}\u{1F3FB}";
    const CHARACTER_HAND_WITH_FINGERS_SPLAYED_MEDIUM_LIGHT_SKIN_TONE = "\u{1F590}\u{1F3FC}";
    const CHARACTER_HAND_WITH_FINGERS_SPLAYED_MEDIUM_SKIN_TONE = "\u{1F590}\u{1F3FD}";
    const CHARACTER_HAND_WITH_FINGERS_SPLAYED_MEDIUM_DARK_SKIN_TONE = "\u{1F590}\u{1F3FE}";
    const CHARACTER_HAND_WITH_FINGERS_SPLAYED_DARK_SKIN_TONE = "\u{1F590}\u{1F3FF}";
    const CHARACTER_RAISED_HAND = "\u{270B}";
    const CHARACTER_RAISED_HAND_LIGHT_SKIN_TONE = "\u{270B}\u{1F3FB}";
    const CHARACTER_RAISED_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{270B}\u{1F3FC}";
    const CHARACTER_RAISED_HAND_MEDIUM_SKIN_TONE = "\u{270B}\u{1F3FD}";
    const CHARACTER_RAISED_HAND_MEDIUM_DARK_SKIN_TONE = "\u{270B}\u{1F3FE}";
    const CHARACTER_RAISED_HAND_DARK_SKIN_TONE = "\u{270B}\u{1F3FF}";
    const CHARACTER_VULCAN_SALUTE = "\u{1F596}";
    const CHARACTER_VULCAN_SALUTE_LIGHT_SKIN_TONE = "\u{1F596}\u{1F3FB}";
    const CHARACTER_VULCAN_SALUTE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F596}\u{1F3FC}";
    const CHARACTER_VULCAN_SALUTE_MEDIUM_SKIN_TONE = "\u{1F596}\u{1F3FD}";
    const CHARACTER_VULCAN_SALUTE_MEDIUM_DARK_SKIN_TONE = "\u{1F596}\u{1F3FE}";
    const CHARACTER_VULCAN_SALUTE_DARK_SKIN_TONE = "\u{1F596}\u{1F3FF}";
    const CHARACTER_RIGHTWARDS_HAND = "\u{1FAF1}";
    const CHARACTER_RIGHTWARDS_HAND_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FB}";
    const CHARACTER_RIGHTWARDS_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FC}";
    const CHARACTER_RIGHTWARDS_HAND_MEDIUM_SKIN_TONE = "\u{1FAF1}\u{1F3FD}";
    const CHARACTER_RIGHTWARDS_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FE}";
    const CHARACTER_RIGHTWARDS_HAND_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FF}";
    const CHARACTER_LEFTWARDS_HAND = "\u{1FAF2}";
    const CHARACTER_LEFTWARDS_HAND_LIGHT_SKIN_TONE = "\u{1FAF2}\u{1F3FB}";
    const CHARACTER_LEFTWARDS_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF2}\u{1F3FC}";
    const CHARACTER_LEFTWARDS_HAND_MEDIUM_SKIN_TONE = "\u{1FAF2}\u{1F3FD}";
    const CHARACTER_LEFTWARDS_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1FAF2}\u{1F3FE}";
    const CHARACTER_LEFTWARDS_HAND_DARK_SKIN_TONE = "\u{1FAF2}\u{1F3FF}";
    const CHARACTER_PALM_DOWN_HAND = "\u{1FAF3}";
    const CHARACTER_PALM_DOWN_HAND_LIGHT_SKIN_TONE = "\u{1FAF3}\u{1F3FB}";
    const CHARACTER_PALM_DOWN_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF3}\u{1F3FC}";
    const CHARACTER_PALM_DOWN_HAND_MEDIUM_SKIN_TONE = "\u{1FAF3}\u{1F3FD}";
    const CHARACTER_PALM_DOWN_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1FAF3}\u{1F3FE}";
    const CHARACTER_PALM_DOWN_HAND_DARK_SKIN_TONE = "\u{1FAF3}\u{1F3FF}";
    const CHARACTER_PALM_UP_HAND = "\u{1FAF4}";
    const CHARACTER_PALM_UP_HAND_LIGHT_SKIN_TONE = "\u{1FAF4}\u{1F3FB}";
    const CHARACTER_PALM_UP_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF4}\u{1F3FC}";
    const CHARACTER_PALM_UP_HAND_MEDIUM_SKIN_TONE = "\u{1FAF4}\u{1F3FD}";
    const CHARACTER_PALM_UP_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1FAF4}\u{1F3FE}";
    const CHARACTER_PALM_UP_HAND_DARK_SKIN_TONE = "\u{1FAF4}\u{1F3FF}";
    // ##### Emoji subgroup: HAND-FINGERS-PARTIAL #####
    const CHARACTER_OK_HAND = "\u{1F44C}";
    const CHARACTER_OK_HAND_LIGHT_SKIN_TONE = "\u{1F44C}\u{1F3FB}";
    const CHARACTER_OK_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F44C}\u{1F3FC}";
    const CHARACTER_OK_HAND_MEDIUM_SKIN_TONE = "\u{1F44C}\u{1F3FD}";
    const CHARACTER_OK_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F44C}\u{1F3FE}";
    const CHARACTER_OK_HAND_DARK_SKIN_TONE = "\u{1F44C}\u{1F3FF}";
    const CHARACTER_PINCHED_FINGERS = "\u{1F90C}";
    const CHARACTER_PINCHED_FINGERS_LIGHT_SKIN_TONE = "\u{1F90C}\u{1F3FB}";
    const CHARACTER_PINCHED_FINGERS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F90C}\u{1F3FC}";
    const CHARACTER_PINCHED_FINGERS_MEDIUM_SKIN_TONE = "\u{1F90C}\u{1F3FD}";
    const CHARACTER_PINCHED_FINGERS_MEDIUM_DARK_SKIN_TONE = "\u{1F90C}\u{1F3FE}";
    const CHARACTER_PINCHED_FINGERS_DARK_SKIN_TONE = "\u{1F90C}\u{1F3FF}";
    const CHARACTER_PINCHING_HAND = "\u{1F90F}";
    const CHARACTER_PINCHING_HAND_LIGHT_SKIN_TONE = "\u{1F90F}\u{1F3FB}";
    const CHARACTER_PINCHING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F90F}\u{1F3FC}";
    const CHARACTER_PINCHING_HAND_MEDIUM_SKIN_TONE = "\u{1F90F}\u{1F3FD}";
    const CHARACTER_PINCHING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F90F}\u{1F3FE}";
    const CHARACTER_PINCHING_HAND_DARK_SKIN_TONE = "\u{1F90F}\u{1F3FF}";
    const CHARACTER_VICTORY_HAND = "\u{270C}\u{FE0F}";
    const CHARACTER_VICTORY_HAND_LIGHT_SKIN_TONE = "\u{270C}\u{1F3FB}";
    const CHARACTER_VICTORY_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{270C}\u{1F3FC}";
    const CHARACTER_VICTORY_HAND_MEDIUM_SKIN_TONE = "\u{270C}\u{1F3FD}";
    const CHARACTER_VICTORY_HAND_MEDIUM_DARK_SKIN_TONE = "\u{270C}\u{1F3FE}";
    const CHARACTER_VICTORY_HAND_DARK_SKIN_TONE = "\u{270C}\u{1F3FF}";
    const CHARACTER_CROSSED_FINGERS = "\u{1F91E}";
    const CHARACTER_CROSSED_FINGERS_LIGHT_SKIN_TONE = "\u{1F91E}\u{1F3FB}";
    const CHARACTER_CROSSED_FINGERS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F91E}\u{1F3FC}";
    const CHARACTER_CROSSED_FINGERS_MEDIUM_SKIN_TONE = "\u{1F91E}\u{1F3FD}";
    const CHARACTER_CROSSED_FINGERS_MEDIUM_DARK_SKIN_TONE = "\u{1F91E}\u{1F3FE}";
    const CHARACTER_CROSSED_FINGERS_DARK_SKIN_TONE = "\u{1F91E}\u{1F3FF}";
    const CHARACTER_HAND_WITH_INDEX_FINGER_AND_THUMB_CROSSED = "\u{1FAF0}";
    const CHARACTER_HAND_WITH_INDEX_FINGER_AND_THUMB_CROSSED_LIGHT_SKIN_TONE = "\u{1FAF0}\u{1F3FB}";
    const CHARACTER_HAND_WITH_INDEX_FINGER_AND_THUMB_CROSSED_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF0}\u{1F3FC}";
    const CHARACTER_HAND_WITH_INDEX_FINGER_AND_THUMB_CROSSED_MEDIUM_SKIN_TONE = "\u{1FAF0}\u{1F3FD}";
    const CHARACTER_HAND_WITH_INDEX_FINGER_AND_THUMB_CROSSED_MEDIUM_DARK_SKIN_TONE = "\u{1FAF0}\u{1F3FE}";
    const CHARACTER_HAND_WITH_INDEX_FINGER_AND_THUMB_CROSSED_DARK_SKIN_TONE = "\u{1FAF0}\u{1F3FF}";
    const CHARACTER_LOVE_YOU_GESTURE = "\u{1F91F}";
    const CHARACTER_LOVE_YOU_GESTURE_LIGHT_SKIN_TONE = "\u{1F91F}\u{1F3FB}";
    const CHARACTER_LOVE_YOU_GESTURE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F91F}\u{1F3FC}";
    const CHARACTER_LOVE_YOU_GESTURE_MEDIUM_SKIN_TONE = "\u{1F91F}\u{1F3FD}";
    const CHARACTER_LOVE_YOU_GESTURE_MEDIUM_DARK_SKIN_TONE = "\u{1F91F}\u{1F3FE}";
    const CHARACTER_LOVE_YOU_GESTURE_DARK_SKIN_TONE = "\u{1F91F}\u{1F3FF}";
    const CHARACTER_SIGN_OF_THE_HORNS = "\u{1F918}";
    const CHARACTER_SIGN_OF_THE_HORNS_LIGHT_SKIN_TONE = "\u{1F918}\u{1F3FB}";
    const CHARACTER_SIGN_OF_THE_HORNS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F918}\u{1F3FC}";
    const CHARACTER_SIGN_OF_THE_HORNS_MEDIUM_SKIN_TONE = "\u{1F918}\u{1F3FD}";
    const CHARACTER_SIGN_OF_THE_HORNS_MEDIUM_DARK_SKIN_TONE = "\u{1F918}\u{1F3FE}";
    const CHARACTER_SIGN_OF_THE_HORNS_DARK_SKIN_TONE = "\u{1F918}\u{1F3FF}";
    const CHARACTER_CALL_ME_HAND = "\u{1F919}";
    const CHARACTER_CALL_ME_HAND_LIGHT_SKIN_TONE = "\u{1F919}\u{1F3FB}";
    const CHARACTER_CALL_ME_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F919}\u{1F3FC}";
    const CHARACTER_CALL_ME_HAND_MEDIUM_SKIN_TONE = "\u{1F919}\u{1F3FD}";
    const CHARACTER_CALL_ME_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F919}\u{1F3FE}";
    const CHARACTER_CALL_ME_HAND_DARK_SKIN_TONE = "\u{1F919}\u{1F3FF}";
    // ##### Emoji subgroup: HAND-SINGLE-FINGER #####
    const CHARACTER_BACKHAND_INDEX_POINTING_LEFT = "\u{1F448}";
    const CHARACTER_BACKHAND_INDEX_POINTING_LEFT_LIGHT_SKIN_TONE = "\u{1F448}\u{1F3FB}";
    const CHARACTER_BACKHAND_INDEX_POINTING_LEFT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F448}\u{1F3FC}";
    const CHARACTER_BACKHAND_INDEX_POINTING_LEFT_MEDIUM_SKIN_TONE = "\u{1F448}\u{1F3FD}";
    const CHARACTER_BACKHAND_INDEX_POINTING_LEFT_MEDIUM_DARK_SKIN_TONE = "\u{1F448}\u{1F3FE}";
    const CHARACTER_BACKHAND_INDEX_POINTING_LEFT_DARK_SKIN_TONE = "\u{1F448}\u{1F3FF}";
    const CHARACTER_BACKHAND_INDEX_POINTING_RIGHT = "\u{1F449}";
    const CHARACTER_BACKHAND_INDEX_POINTING_RIGHT_LIGHT_SKIN_TONE = "\u{1F449}\u{1F3FB}";
    const CHARACTER_BACKHAND_INDEX_POINTING_RIGHT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F449}\u{1F3FC}";
    const CHARACTER_BACKHAND_INDEX_POINTING_RIGHT_MEDIUM_SKIN_TONE = "\u{1F449}\u{1F3FD}";
    const CHARACTER_BACKHAND_INDEX_POINTING_RIGHT_MEDIUM_DARK_SKIN_TONE = "\u{1F449}\u{1F3FE}";
    const CHARACTER_BACKHAND_INDEX_POINTING_RIGHT_DARK_SKIN_TONE = "\u{1F449}\u{1F3FF}";
    const CHARACTER_BACKHAND_INDEX_POINTING_UP = "\u{1F446}";
    const CHARACTER_BACKHAND_INDEX_POINTING_UP_LIGHT_SKIN_TONE = "\u{1F446}\u{1F3FB}";
    const CHARACTER_BACKHAND_INDEX_POINTING_UP_MEDIUM_LIGHT_SKIN_TONE = "\u{1F446}\u{1F3FC}";
    const CHARACTER_BACKHAND_INDEX_POINTING_UP_MEDIUM_SKIN_TONE = "\u{1F446}\u{1F3FD}";
    const CHARACTER_BACKHAND_INDEX_POINTING_UP_MEDIUM_DARK_SKIN_TONE = "\u{1F446}\u{1F3FE}";
    const CHARACTER_BACKHAND_INDEX_POINTING_UP_DARK_SKIN_TONE = "\u{1F446}\u{1F3FF}";
    const CHARACTER_MIDDLE_FINGER = "\u{1F595}";
    const CHARACTER_MIDDLE_FINGER_LIGHT_SKIN_TONE = "\u{1F595}\u{1F3FB}";
    const CHARACTER_MIDDLE_FINGER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F595}\u{1F3FC}";
    const CHARACTER_MIDDLE_FINGER_MEDIUM_SKIN_TONE = "\u{1F595}\u{1F3FD}";
    const CHARACTER_MIDDLE_FINGER_MEDIUM_DARK_SKIN_TONE = "\u{1F595}\u{1F3FE}";
    const CHARACTER_MIDDLE_FINGER_DARK_SKIN_TONE = "\u{1F595}\u{1F3FF}";
    const CHARACTER_BACKHAND_INDEX_POINTING_DOWN = "\u{1F447}";
    const CHARACTER_BACKHAND_INDEX_POINTING_DOWN_LIGHT_SKIN_TONE = "\u{1F447}\u{1F3FB}";
    const CHARACTER_BACKHAND_INDEX_POINTING_DOWN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F447}\u{1F3FC}";
    const CHARACTER_BACKHAND_INDEX_POINTING_DOWN_MEDIUM_SKIN_TONE = "\u{1F447}\u{1F3FD}";
    const CHARACTER_BACKHAND_INDEX_POINTING_DOWN_MEDIUM_DARK_SKIN_TONE = "\u{1F447}\u{1F3FE}";
    const CHARACTER_BACKHAND_INDEX_POINTING_DOWN_DARK_SKIN_TONE = "\u{1F447}\u{1F3FF}";
    const CHARACTER_INDEX_POINTING_UP = "\u{261D}\u{FE0F}";
    const CHARACTER_INDEX_POINTING_UP_LIGHT_SKIN_TONE = "\u{261D}\u{1F3FB}";
    const CHARACTER_INDEX_POINTING_UP_MEDIUM_LIGHT_SKIN_TONE = "\u{261D}\u{1F3FC}";
    const CHARACTER_INDEX_POINTING_UP_MEDIUM_SKIN_TONE = "\u{261D}\u{1F3FD}";
    const CHARACTER_INDEX_POINTING_UP_MEDIUM_DARK_SKIN_TONE = "\u{261D}\u{1F3FE}";
    const CHARACTER_INDEX_POINTING_UP_DARK_SKIN_TONE = "\u{261D}\u{1F3FF}";
    const CHARACTER_INDEX_POINTING_AT_THE_VIEWER = "\u{1FAF5}";
    const CHARACTER_INDEX_POINTING_AT_THE_VIEWER_LIGHT_SKIN_TONE = "\u{1FAF5}\u{1F3FB}";
    const CHARACTER_INDEX_POINTING_AT_THE_VIEWER_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF5}\u{1F3FC}";
    const CHARACTER_INDEX_POINTING_AT_THE_VIEWER_MEDIUM_SKIN_TONE = "\u{1FAF5}\u{1F3FD}";
    const CHARACTER_INDEX_POINTING_AT_THE_VIEWER_MEDIUM_DARK_SKIN_TONE = "\u{1FAF5}\u{1F3FE}";
    const CHARACTER_INDEX_POINTING_AT_THE_VIEWER_DARK_SKIN_TONE = "\u{1FAF5}\u{1F3FF}";
    // ##### Emoji subgroup: HAND-FINGERS-CLOSED #####
    const CHARACTER_THUMBS_UP = "\u{1F44D}";
    const CHARACTER_THUMBS_UP_LIGHT_SKIN_TONE = "\u{1F44D}\u{1F3FB}";
    const CHARACTER_THUMBS_UP_MEDIUM_LIGHT_SKIN_TONE = "\u{1F44D}\u{1F3FC}";
    const CHARACTER_THUMBS_UP_MEDIUM_SKIN_TONE = "\u{1F44D}\u{1F3FD}";
    const CHARACTER_THUMBS_UP_MEDIUM_DARK_SKIN_TONE = "\u{1F44D}\u{1F3FE}";
    const CHARACTER_THUMBS_UP_DARK_SKIN_TONE = "\u{1F44D}\u{1F3FF}";
    const CHARACTER_THUMBS_DOWN = "\u{1F44E}";
    const CHARACTER_THUMBS_DOWN_LIGHT_SKIN_TONE = "\u{1F44E}\u{1F3FB}";
    const CHARACTER_THUMBS_DOWN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F44E}\u{1F3FC}";
    const CHARACTER_THUMBS_DOWN_MEDIUM_SKIN_TONE = "\u{1F44E}\u{1F3FD}";
    const CHARACTER_THUMBS_DOWN_MEDIUM_DARK_SKIN_TONE = "\u{1F44E}\u{1F3FE}";
    const CHARACTER_THUMBS_DOWN_DARK_SKIN_TONE = "\u{1F44E}\u{1F3FF}";
    const CHARACTER_RAISED_FIST = "\u{270A}";
    const CHARACTER_RAISED_FIST_LIGHT_SKIN_TONE = "\u{270A}\u{1F3FB}";
    const CHARACTER_RAISED_FIST_MEDIUM_LIGHT_SKIN_TONE = "\u{270A}\u{1F3FC}";
    const CHARACTER_RAISED_FIST_MEDIUM_SKIN_TONE = "\u{270A}\u{1F3FD}";
    const CHARACTER_RAISED_FIST_MEDIUM_DARK_SKIN_TONE = "\u{270A}\u{1F3FE}";
    const CHARACTER_RAISED_FIST_DARK_SKIN_TONE = "\u{270A}\u{1F3FF}";
    const CHARACTER_ONCOMING_FIST = "\u{1F44A}";
    const CHARACTER_ONCOMING_FIST_LIGHT_SKIN_TONE = "\u{1F44A}\u{1F3FB}";
    const CHARACTER_ONCOMING_FIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F44A}\u{1F3FC}";
    const CHARACTER_ONCOMING_FIST_MEDIUM_SKIN_TONE = "\u{1F44A}\u{1F3FD}";
    const CHARACTER_ONCOMING_FIST_MEDIUM_DARK_SKIN_TONE = "\u{1F44A}\u{1F3FE}";
    const CHARACTER_ONCOMING_FIST_DARK_SKIN_TONE = "\u{1F44A}\u{1F3FF}";
    const CHARACTER_LEFT_FACING_FIST = "\u{1F91B}";
    const CHARACTER_LEFT_FACING_FIST_LIGHT_SKIN_TONE = "\u{1F91B}\u{1F3FB}";
    const CHARACTER_LEFT_FACING_FIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F91B}\u{1F3FC}";
    const CHARACTER_LEFT_FACING_FIST_MEDIUM_SKIN_TONE = "\u{1F91B}\u{1F3FD}";
    const CHARACTER_LEFT_FACING_FIST_MEDIUM_DARK_SKIN_TONE = "\u{1F91B}\u{1F3FE}";
    const CHARACTER_LEFT_FACING_FIST_DARK_SKIN_TONE = "\u{1F91B}\u{1F3FF}";
    const CHARACTER_RIGHT_FACING_FIST = "\u{1F91C}";
    const CHARACTER_RIGHT_FACING_FIST_LIGHT_SKIN_TONE = "\u{1F91C}\u{1F3FB}";
    const CHARACTER_RIGHT_FACING_FIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F91C}\u{1F3FC}";
    const CHARACTER_RIGHT_FACING_FIST_MEDIUM_SKIN_TONE = "\u{1F91C}\u{1F3FD}";
    const CHARACTER_RIGHT_FACING_FIST_MEDIUM_DARK_SKIN_TONE = "\u{1F91C}\u{1F3FE}";
    const CHARACTER_RIGHT_FACING_FIST_DARK_SKIN_TONE = "\u{1F91C}\u{1F3FF}";
    // ##### Emoji subgroup: HANDS #####
    const CHARACTER_CLAPPING_HANDS = "\u{1F44F}";
    const CHARACTER_CLAPPING_HANDS_LIGHT_SKIN_TONE = "\u{1F44F}\u{1F3FB}";
    const CHARACTER_CLAPPING_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F44F}\u{1F3FC}";
    const CHARACTER_CLAPPING_HANDS_MEDIUM_SKIN_TONE = "\u{1F44F}\u{1F3FD}";
    const CHARACTER_CLAPPING_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F44F}\u{1F3FE}";
    const CHARACTER_CLAPPING_HANDS_DARK_SKIN_TONE = "\u{1F44F}\u{1F3FF}";
    const CHARACTER_RAISING_HANDS = "\u{1F64C}";
    const CHARACTER_RAISING_HANDS_LIGHT_SKIN_TONE = "\u{1F64C}\u{1F3FB}";
    const CHARACTER_RAISING_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64C}\u{1F3FC}";
    const CHARACTER_RAISING_HANDS_MEDIUM_SKIN_TONE = "\u{1F64C}\u{1F3FD}";
    const CHARACTER_RAISING_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F64C}\u{1F3FE}";
    const CHARACTER_RAISING_HANDS_DARK_SKIN_TONE = "\u{1F64C}\u{1F3FF}";
    const CHARACTER_HEART_HANDS = "\u{1FAF6}";
    const CHARACTER_HEART_HANDS_LIGHT_SKIN_TONE = "\u{1FAF6}\u{1F3FB}";
    const CHARACTER_HEART_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF6}\u{1F3FC}";
    const CHARACTER_HEART_HANDS_MEDIUM_SKIN_TONE = "\u{1FAF6}\u{1F3FD}";
    const CHARACTER_HEART_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1FAF6}\u{1F3FE}";
    const CHARACTER_HEART_HANDS_DARK_SKIN_TONE = "\u{1FAF6}\u{1F3FF}";
    const CHARACTER_OPEN_HANDS = "\u{1F450}";
    const CHARACTER_OPEN_HANDS_LIGHT_SKIN_TONE = "\u{1F450}\u{1F3FB}";
    const CHARACTER_OPEN_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F450}\u{1F3FC}";
    const CHARACTER_OPEN_HANDS_MEDIUM_SKIN_TONE = "\u{1F450}\u{1F3FD}";
    const CHARACTER_OPEN_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F450}\u{1F3FE}";
    const CHARACTER_OPEN_HANDS_DARK_SKIN_TONE = "\u{1F450}\u{1F3FF}";
    const CHARACTER_PALMS_UP_TOGETHER = "\u{1F932}";
    const CHARACTER_PALMS_UP_TOGETHER_LIGHT_SKIN_TONE = "\u{1F932}\u{1F3FB}";
    const CHARACTER_PALMS_UP_TOGETHER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F932}\u{1F3FC}";
    const CHARACTER_PALMS_UP_TOGETHER_MEDIUM_SKIN_TONE = "\u{1F932}\u{1F3FD}";
    const CHARACTER_PALMS_UP_TOGETHER_MEDIUM_DARK_SKIN_TONE = "\u{1F932}\u{1F3FE}";
    const CHARACTER_PALMS_UP_TOGETHER_DARK_SKIN_TONE = "\u{1F932}\u{1F3FF}";
    const CHARACTER_HANDSHAKE = "\u{1F91D}";
    const CHARACTER_HANDSHAKE_LIGHT_SKIN_TONE = "\u{1F91D}\u{1F3FB}";
    const CHARACTER_HANDSHAKE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F91D}\u{1F3FC}";
    const CHARACTER_HANDSHAKE_MEDIUM_SKIN_TONE = "\u{1F91D}\u{1F3FD}";
    const CHARACTER_HANDSHAKE_MEDIUM_DARK_SKIN_TONE = "\u{1F91D}\u{1F3FE}";
    const CHARACTER_HANDSHAKE_DARK_SKIN_TONE = "\u{1F91D}\u{1F3FF}";
    const CHARACTER_HANDSHAKE_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FB}\u{200D}\u{1FAF2}\u{1F3FC}";
    const CHARACTER_HANDSHAKE_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1FAF1}\u{1F3FB}\u{200D}\u{1FAF2}\u{1F3FD}";
    const CHARACTER_HANDSHAKE_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FB}\u{200D}\u{1FAF2}\u{1F3FE}";
    const CHARACTER_HANDSHAKE_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FB}\u{200D}\u{1FAF2}\u{1F3FF}";
    const CHARACTER_HANDSHAKE_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FC}\u{200D}\u{1FAF2}\u{1F3FB}";
    const CHARACTER_HANDSHAKE_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1FAF1}\u{1F3FC}\u{200D}\u{1FAF2}\u{1F3FD}";
    const CHARACTER_HANDSHAKE_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FC}\u{200D}\u{1FAF2}\u{1F3FE}";
    const CHARACTER_HANDSHAKE_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FC}\u{200D}\u{1FAF2}\u{1F3FF}";
    const CHARACTER_HANDSHAKE_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FD}\u{200D}\u{1FAF2}\u{1F3FB}";
    const CHARACTER_HANDSHAKE_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FD}\u{200D}\u{1FAF2}\u{1F3FC}";
    const CHARACTER_HANDSHAKE_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FD}\u{200D}\u{1FAF2}\u{1F3FE}";
    const CHARACTER_HANDSHAKE_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FD}\u{200D}\u{1FAF2}\u{1F3FF}";
    const CHARACTER_HANDSHAKE_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FE}\u{200D}\u{1FAF2}\u{1F3FB}";
    const CHARACTER_HANDSHAKE_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FE}\u{200D}\u{1FAF2}\u{1F3FC}";
    const CHARACTER_HANDSHAKE_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1FAF1}\u{1F3FE}\u{200D}\u{1FAF2}\u{1F3FD}";
    const CHARACTER_HANDSHAKE_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FE}\u{200D}\u{1FAF2}\u{1F3FF}";
    const CHARACTER_HANDSHAKE_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FF}\u{200D}\u{1FAF2}\u{1F3FB}";
    const CHARACTER_HANDSHAKE_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAF1}\u{1F3FF}\u{200D}\u{1FAF2}\u{1F3FC}";
    const CHARACTER_HANDSHAKE_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1FAF1}\u{1F3FF}\u{200D}\u{1FAF2}\u{1F3FD}";
    const CHARACTER_HANDSHAKE_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1FAF1}\u{1F3FF}\u{200D}\u{1FAF2}\u{1F3FE}";
    const CHARACTER_FOLDED_HANDS = "\u{1F64F}";
    const CHARACTER_FOLDED_HANDS_LIGHT_SKIN_TONE = "\u{1F64F}\u{1F3FB}";
    const CHARACTER_FOLDED_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64F}\u{1F3FC}";
    const CHARACTER_FOLDED_HANDS_MEDIUM_SKIN_TONE = "\u{1F64F}\u{1F3FD}";
    const CHARACTER_FOLDED_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F64F}\u{1F3FE}";
    const CHARACTER_FOLDED_HANDS_DARK_SKIN_TONE = "\u{1F64F}\u{1F3FF}";
    // ##### Emoji subgroup: HAND-PROP #####
    const CHARACTER_WRITING_HAND = "\u{270D}\u{FE0F}";
    const CHARACTER_WRITING_HAND_LIGHT_SKIN_TONE = "\u{270D}\u{1F3FB}";
    const CHARACTER_WRITING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{270D}\u{1F3FC}";
    const CHARACTER_WRITING_HAND_MEDIUM_SKIN_TONE = "\u{270D}\u{1F3FD}";
    const CHARACTER_WRITING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{270D}\u{1F3FE}";
    const CHARACTER_WRITING_HAND_DARK_SKIN_TONE = "\u{270D}\u{1F3FF}";
    const CHARACTER_NAIL_POLISH = "\u{1F485}";
    const CHARACTER_NAIL_POLISH_LIGHT_SKIN_TONE = "\u{1F485}\u{1F3FB}";
    const CHARACTER_NAIL_POLISH_MEDIUM_LIGHT_SKIN_TONE = "\u{1F485}\u{1F3FC}";
    const CHARACTER_NAIL_POLISH_MEDIUM_SKIN_TONE = "\u{1F485}\u{1F3FD}";
    const CHARACTER_NAIL_POLISH_MEDIUM_DARK_SKIN_TONE = "\u{1F485}\u{1F3FE}";
    const CHARACTER_NAIL_POLISH_DARK_SKIN_TONE = "\u{1F485}\u{1F3FF}";
    const CHARACTER_SELFIE = "\u{1F933}";
    const CHARACTER_SELFIE_LIGHT_SKIN_TONE = "\u{1F933}\u{1F3FB}";
    const CHARACTER_SELFIE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F933}\u{1F3FC}";
    const CHARACTER_SELFIE_MEDIUM_SKIN_TONE = "\u{1F933}\u{1F3FD}";
    const CHARACTER_SELFIE_MEDIUM_DARK_SKIN_TONE = "\u{1F933}\u{1F3FE}";
    const CHARACTER_SELFIE_DARK_SKIN_TONE = "\u{1F933}\u{1F3FF}";
    // ##### Emoji subgroup: BODY-PARTS #####
    const CHARACTER_FLEXED_BICEPS = "\u{1F4AA}";
    const CHARACTER_FLEXED_BICEPS_LIGHT_SKIN_TONE = "\u{1F4AA}\u{1F3FB}";
    const CHARACTER_FLEXED_BICEPS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F4AA}\u{1F3FC}";
    const CHARACTER_FLEXED_BICEPS_MEDIUM_SKIN_TONE = "\u{1F4AA}\u{1F3FD}";
    const CHARACTER_FLEXED_BICEPS_MEDIUM_DARK_SKIN_TONE = "\u{1F4AA}\u{1F3FE}";
    const CHARACTER_FLEXED_BICEPS_DARK_SKIN_TONE = "\u{1F4AA}\u{1F3FF}";
    const CHARACTER_MECHANICAL_ARM = "\u{1F9BE}";
    const CHARACTER_MECHANICAL_LEG = "\u{1F9BF}";
    const CHARACTER_LEG = "\u{1F9B5}";
    const CHARACTER_LEG_LIGHT_SKIN_TONE = "\u{1F9B5}\u{1F3FB}";
    const CHARACTER_LEG_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B5}\u{1F3FC}";
    const CHARACTER_LEG_MEDIUM_SKIN_TONE = "\u{1F9B5}\u{1F3FD}";
    const CHARACTER_LEG_MEDIUM_DARK_SKIN_TONE = "\u{1F9B5}\u{1F3FE}";
    const CHARACTER_LEG_DARK_SKIN_TONE = "\u{1F9B5}\u{1F3FF}";
    const CHARACTER_FOOT = "\u{1F9B6}";
    const CHARACTER_FOOT_LIGHT_SKIN_TONE = "\u{1F9B6}\u{1F3FB}";
    const CHARACTER_FOOT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B6}\u{1F3FC}";
    const CHARACTER_FOOT_MEDIUM_SKIN_TONE = "\u{1F9B6}\u{1F3FD}";
    const CHARACTER_FOOT_MEDIUM_DARK_SKIN_TONE = "\u{1F9B6}\u{1F3FE}";
    const CHARACTER_FOOT_DARK_SKIN_TONE = "\u{1F9B6}\u{1F3FF}";
    const CHARACTER_EAR = "\u{1F442}";
    const CHARACTER_EAR_LIGHT_SKIN_TONE = "\u{1F442}\u{1F3FB}";
    const CHARACTER_EAR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F442}\u{1F3FC}";
    const CHARACTER_EAR_MEDIUM_SKIN_TONE = "\u{1F442}\u{1F3FD}";
    const CHARACTER_EAR_MEDIUM_DARK_SKIN_TONE = "\u{1F442}\u{1F3FE}";
    const CHARACTER_EAR_DARK_SKIN_TONE = "\u{1F442}\u{1F3FF}";
    const CHARACTER_EAR_WITH_HEARING_AID = "\u{1F9BB}";
    const CHARACTER_EAR_WITH_HEARING_AID_LIGHT_SKIN_TONE = "\u{1F9BB}\u{1F3FB}";
    const CHARACTER_EAR_WITH_HEARING_AID_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9BB}\u{1F3FC}";
    const CHARACTER_EAR_WITH_HEARING_AID_MEDIUM_SKIN_TONE = "\u{1F9BB}\u{1F3FD}";
    const CHARACTER_EAR_WITH_HEARING_AID_MEDIUM_DARK_SKIN_TONE = "\u{1F9BB}\u{1F3FE}";
    const CHARACTER_EAR_WITH_HEARING_AID_DARK_SKIN_TONE = "\u{1F9BB}\u{1F3FF}";
    const CHARACTER_NOSE = "\u{1F443}";
    const CHARACTER_NOSE_LIGHT_SKIN_TONE = "\u{1F443}\u{1F3FB}";
    const CHARACTER_NOSE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F443}\u{1F3FC}";
    const CHARACTER_NOSE_MEDIUM_SKIN_TONE = "\u{1F443}\u{1F3FD}";
    const CHARACTER_NOSE_MEDIUM_DARK_SKIN_TONE = "\u{1F443}\u{1F3FE}";
    const CHARACTER_NOSE_DARK_SKIN_TONE = "\u{1F443}\u{1F3FF}";
    const CHARACTER_BRAIN = "\u{1F9E0}";
    const CHARACTER_ANATOMICAL_HEART = "\u{1FAC0}";
    const CHARACTER_LUNGS = "\u{1FAC1}";
    const CHARACTER_TOOTH = "\u{1F9B7}";
    const CHARACTER_BONE = "\u{1F9B4}";
    const CHARACTER_EYES = "\u{1F440}";
    const CHARACTER_EYE = "\u{1F441}\u{FE0F}";
    const CHARACTER_TONGUE = "\u{1F445}";
    const CHARACTER_MOUTH = "\u{1F444}";
    const CHARACTER_BITING_LIP = "\u{1FAE6}";
    // ##### Emoji subgroup: PERSON #####
    const CHARACTER_BABY = "\u{1F476}";
    const CHARACTER_BABY_LIGHT_SKIN_TONE = "\u{1F476}\u{1F3FB}";
    const CHARACTER_BABY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F476}\u{1F3FC}";
    const CHARACTER_BABY_MEDIUM_SKIN_TONE = "\u{1F476}\u{1F3FD}";
    const CHARACTER_BABY_MEDIUM_DARK_SKIN_TONE = "\u{1F476}\u{1F3FE}";
    const CHARACTER_BABY_DARK_SKIN_TONE = "\u{1F476}\u{1F3FF}";
    const CHARACTER_CHILD = "\u{1F9D2}";
    const CHARACTER_CHILD_LIGHT_SKIN_TONE = "\u{1F9D2}\u{1F3FB}";
    const CHARACTER_CHILD_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D2}\u{1F3FC}";
    const CHARACTER_CHILD_MEDIUM_SKIN_TONE = "\u{1F9D2}\u{1F3FD}";
    const CHARACTER_CHILD_MEDIUM_DARK_SKIN_TONE = "\u{1F9D2}\u{1F3FE}";
    const CHARACTER_CHILD_DARK_SKIN_TONE = "\u{1F9D2}\u{1F3FF}";
    const CHARACTER_BOY = "\u{1F466}";
    const CHARACTER_BOY_LIGHT_SKIN_TONE = "\u{1F466}\u{1F3FB}";
    const CHARACTER_BOY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F466}\u{1F3FC}";
    const CHARACTER_BOY_MEDIUM_SKIN_TONE = "\u{1F466}\u{1F3FD}";
    const CHARACTER_BOY_MEDIUM_DARK_SKIN_TONE = "\u{1F466}\u{1F3FE}";
    const CHARACTER_BOY_DARK_SKIN_TONE = "\u{1F466}\u{1F3FF}";
    const CHARACTER_GIRL = "\u{1F467}";
    const CHARACTER_GIRL_LIGHT_SKIN_TONE = "\u{1F467}\u{1F3FB}";
    const CHARACTER_GIRL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F467}\u{1F3FC}";
    const CHARACTER_GIRL_MEDIUM_SKIN_TONE = "\u{1F467}\u{1F3FD}";
    const CHARACTER_GIRL_MEDIUM_DARK_SKIN_TONE = "\u{1F467}\u{1F3FE}";
    const CHARACTER_GIRL_DARK_SKIN_TONE = "\u{1F467}\u{1F3FF}";
    const CHARACTER_PERSON = "\u{1F9D1}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}";
    const CHARACTER_PERSON_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}";
    const CHARACTER_PERSON_BLOND_HAIR = "\u{1F471}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FB}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FC}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FD}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FE}";
    const CHARACTER_PERSON_DARK_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FF}";
    const CHARACTER_MAN = "\u{1F468}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}";
    const CHARACTER_MAN_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}";
    const CHARACTER_PERSON_BEARD = "\u{1F9D4}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FB}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FC}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FD}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FE}";
    const CHARACTER_PERSON_DARK_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FF}";
    const CHARACTER_MAN_BEARD = "\u{1F9D4}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DARK_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_BEARD = "\u{1F9D4}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE_BEARD = "\u{1F9D4}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MAN_RED_HAIR = "\u{1F468}\u{200D}\u{1F9B0}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE_RED_HAIR = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9B0}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE_RED_HAIR = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9B0}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE_RED_HAIR = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9B0}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE_RED_HAIR = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9B0}";
    const CHARACTER_MAN_DARK_SKIN_TONE_RED_HAIR = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9B0}";
    const CHARACTER_MAN_CURLY_HAIR = "\u{1F468}\u{200D}\u{1F9B1}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE_CURLY_HAIR = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9B1}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE_CURLY_HAIR = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9B1}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE_CURLY_HAIR = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9B1}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE_CURLY_HAIR = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9B1}";
    const CHARACTER_MAN_DARK_SKIN_TONE_CURLY_HAIR = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9B1}";
    const CHARACTER_MAN_WHITE_HAIR = "\u{1F468}\u{200D}\u{1F9B3}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE_WHITE_HAIR = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9B3}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE_WHITE_HAIR = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9B3}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE_WHITE_HAIR = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9B3}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE_WHITE_HAIR = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9B3}";
    const CHARACTER_MAN_DARK_SKIN_TONE_WHITE_HAIR = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9B3}";
    const CHARACTER_MAN_BALD = "\u{1F468}\u{200D}\u{1F9B2}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE_BALD = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9B2}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE_BALD = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9B2}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE_BALD = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9B2}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE_BALD = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9B2}";
    const CHARACTER_MAN_DARK_SKIN_TONE_BALD = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN = "\u{1F469}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}";
    const CHARACTER_WOMAN_RED_HAIR = "\u{1F469}\u{200D}\u{1F9B0}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE_RED_HAIR = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9B0}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE_RED_HAIR = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9B0}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE_RED_HAIR = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9B0}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE_RED_HAIR = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9B0}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE_RED_HAIR = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9B0}";
    const CHARACTER_PERSON_RED_HAIR = "\u{1F9D1}\u{200D}\u{1F9B0}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE_RED_HAIR = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9B0}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE_RED_HAIR = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9B0}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE_RED_HAIR = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9B0}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE_RED_HAIR = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9B0}";
    const CHARACTER_PERSON_DARK_SKIN_TONE_RED_HAIR = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9B0}";
    const CHARACTER_WOMAN_CURLY_HAIR = "\u{1F469}\u{200D}\u{1F9B1}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE_CURLY_HAIR = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9B1}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE_CURLY_HAIR = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9B1}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE_CURLY_HAIR = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9B1}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE_CURLY_HAIR = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9B1}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE_CURLY_HAIR = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9B1}";
    const CHARACTER_PERSON_CURLY_HAIR = "\u{1F9D1}\u{200D}\u{1F9B1}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE_CURLY_HAIR = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9B1}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE_CURLY_HAIR = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9B1}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE_CURLY_HAIR = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9B1}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE_CURLY_HAIR = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9B1}";
    const CHARACTER_PERSON_DARK_SKIN_TONE_CURLY_HAIR = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9B1}";
    const CHARACTER_WOMAN_WHITE_HAIR = "\u{1F469}\u{200D}\u{1F9B3}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE_WHITE_HAIR = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9B3}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE_WHITE_HAIR = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9B3}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE_WHITE_HAIR = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9B3}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE_WHITE_HAIR = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9B3}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE_WHITE_HAIR = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9B3}";
    const CHARACTER_PERSON_WHITE_HAIR = "\u{1F9D1}\u{200D}\u{1F9B3}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE_WHITE_HAIR = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9B3}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE_WHITE_HAIR = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9B3}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE_WHITE_HAIR = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9B3}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE_WHITE_HAIR = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9B3}";
    const CHARACTER_PERSON_DARK_SKIN_TONE_WHITE_HAIR = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9B3}";
    const CHARACTER_WOMAN_BALD = "\u{1F469}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE_BALD = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE_BALD = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE_BALD = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE_BALD = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE_BALD = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9B2}";
    const CHARACTER_PERSON_BALD = "\u{1F9D1}\u{200D}\u{1F9B2}";
    const CHARACTER_PERSON_LIGHT_SKIN_TONE_BALD = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9B2}";
    const CHARACTER_PERSON_MEDIUM_LIGHT_SKIN_TONE_BALD = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9B2}";
    const CHARACTER_PERSON_MEDIUM_SKIN_TONE_BALD = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9B2}";
    const CHARACTER_PERSON_MEDIUM_DARK_SKIN_TONE_BALD = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9B2}";
    const CHARACTER_PERSON_DARK_SKIN_TONE_BALD = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9B2}";
    const CHARACTER_WOMAN_BLOND_HAIR = "\u{1F471}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIGHT_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MEDIUM_LIGHT_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MEDIUM_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MEDIUM_DARK_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DARK_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MAN_BLOND_HAIR = "\u{1F471}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIGHT_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MEDIUM_LIGHT_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MEDIUM_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MEDIUM_DARK_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DARK_SKIN_TONE_BLOND_HAIR = "\u{1F471}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_OLDER_PERSON = "\u{1F9D3}";
    const CHARACTER_OLDER_PERSON_LIGHT_SKIN_TONE = "\u{1F9D3}\u{1F3FB}";
    const CHARACTER_OLDER_PERSON_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D3}\u{1F3FC}";
    const CHARACTER_OLDER_PERSON_MEDIUM_SKIN_TONE = "\u{1F9D3}\u{1F3FD}";
    const CHARACTER_OLDER_PERSON_MEDIUM_DARK_SKIN_TONE = "\u{1F9D3}\u{1F3FE}";
    const CHARACTER_OLDER_PERSON_DARK_SKIN_TONE = "\u{1F9D3}\u{1F3FF}";
    const CHARACTER_OLD_MAN = "\u{1F474}";
    const CHARACTER_OLD_MAN_LIGHT_SKIN_TONE = "\u{1F474}\u{1F3FB}";
    const CHARACTER_OLD_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F474}\u{1F3FC}";
    const CHARACTER_OLD_MAN_MEDIUM_SKIN_TONE = "\u{1F474}\u{1F3FD}";
    const CHARACTER_OLD_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F474}\u{1F3FE}";
    const CHARACTER_OLD_MAN_DARK_SKIN_TONE = "\u{1F474}\u{1F3FF}";
    const CHARACTER_OLD_WOMAN = "\u{1F475}";
    const CHARACTER_OLD_WOMAN_LIGHT_SKIN_TONE = "\u{1F475}\u{1F3FB}";
    const CHARACTER_OLD_WOMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F475}\u{1F3FC}";
    const CHARACTER_OLD_WOMAN_MEDIUM_SKIN_TONE = "\u{1F475}\u{1F3FD}";
    const CHARACTER_OLD_WOMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F475}\u{1F3FE}";
    const CHARACTER_OLD_WOMAN_DARK_SKIN_TONE = "\u{1F475}\u{1F3FF}";
    // ##### Emoji subgroup: PERSON-GESTURE #####
    const CHARACTER_PERSON_FROWNING = "\u{1F64D}";
    const CHARACTER_PERSON_FROWNING_LIGHT_SKIN_TONE = "\u{1F64D}\u{1F3FB}";
    const CHARACTER_PERSON_FROWNING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64D}\u{1F3FC}";
    const CHARACTER_PERSON_FROWNING_MEDIUM_SKIN_TONE = "\u{1F64D}\u{1F3FD}";
    const CHARACTER_PERSON_FROWNING_MEDIUM_DARK_SKIN_TONE = "\u{1F64D}\u{1F3FE}";
    const CHARACTER_PERSON_FROWNING_DARK_SKIN_TONE = "\u{1F64D}\u{1F3FF}";
    const CHARACTER_MAN_FROWNING = "\u{1F64D}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FROWNING_LIGHT_SKIN_TONE = "\u{1F64D}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FROWNING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64D}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FROWNING_MEDIUM_SKIN_TONE = "\u{1F64D}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FROWNING_MEDIUM_DARK_SKIN_TONE = "\u{1F64D}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FROWNING_DARK_SKIN_TONE = "\u{1F64D}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_FROWNING = "\u{1F64D}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FROWNING_LIGHT_SKIN_TONE = "\u{1F64D}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FROWNING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64D}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FROWNING_MEDIUM_SKIN_TONE = "\u{1F64D}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FROWNING_MEDIUM_DARK_SKIN_TONE = "\u{1F64D}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FROWNING_DARK_SKIN_TONE = "\u{1F64D}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_POUTING = "\u{1F64E}";
    const CHARACTER_PERSON_POUTING_LIGHT_SKIN_TONE = "\u{1F64E}\u{1F3FB}";
    const CHARACTER_PERSON_POUTING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64E}\u{1F3FC}";
    const CHARACTER_PERSON_POUTING_MEDIUM_SKIN_TONE = "\u{1F64E}\u{1F3FD}";
    const CHARACTER_PERSON_POUTING_MEDIUM_DARK_SKIN_TONE = "\u{1F64E}\u{1F3FE}";
    const CHARACTER_PERSON_POUTING_DARK_SKIN_TONE = "\u{1F64E}\u{1F3FF}";
    const CHARACTER_MAN_POUTING = "\u{1F64E}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POUTING_LIGHT_SKIN_TONE = "\u{1F64E}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POUTING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64E}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POUTING_MEDIUM_SKIN_TONE = "\u{1F64E}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POUTING_MEDIUM_DARK_SKIN_TONE = "\u{1F64E}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POUTING_DARK_SKIN_TONE = "\u{1F64E}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_POUTING = "\u{1F64E}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POUTING_LIGHT_SKIN_TONE = "\u{1F64E}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POUTING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64E}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POUTING_MEDIUM_SKIN_TONE = "\u{1F64E}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POUTING_MEDIUM_DARK_SKIN_TONE = "\u{1F64E}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POUTING_DARK_SKIN_TONE = "\u{1F64E}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_GESTURING_NO = "\u{1F645}";
    const CHARACTER_PERSON_GESTURING_NO_LIGHT_SKIN_TONE = "\u{1F645}\u{1F3FB}";
    const CHARACTER_PERSON_GESTURING_NO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F645}\u{1F3FC}";
    const CHARACTER_PERSON_GESTURING_NO_MEDIUM_SKIN_TONE = "\u{1F645}\u{1F3FD}";
    const CHARACTER_PERSON_GESTURING_NO_MEDIUM_DARK_SKIN_TONE = "\u{1F645}\u{1F3FE}";
    const CHARACTER_PERSON_GESTURING_NO_DARK_SKIN_TONE = "\u{1F645}\u{1F3FF}";
    const CHARACTER_MAN_GESTURING_NO = "\u{1F645}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_NO_LIGHT_SKIN_TONE = "\u{1F645}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_NO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F645}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_NO_MEDIUM_SKIN_TONE = "\u{1F645}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_NO_MEDIUM_DARK_SKIN_TONE = "\u{1F645}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_NO_DARK_SKIN_TONE = "\u{1F645}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_NO = "\u{1F645}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_NO_LIGHT_SKIN_TONE = "\u{1F645}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_NO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F645}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_NO_MEDIUM_SKIN_TONE = "\u{1F645}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_NO_MEDIUM_DARK_SKIN_TONE = "\u{1F645}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_NO_DARK_SKIN_TONE = "\u{1F645}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_GESTURING_OK = "\u{1F646}";
    const CHARACTER_PERSON_GESTURING_OK_LIGHT_SKIN_TONE = "\u{1F646}\u{1F3FB}";
    const CHARACTER_PERSON_GESTURING_OK_MEDIUM_LIGHT_SKIN_TONE = "\u{1F646}\u{1F3FC}";
    const CHARACTER_PERSON_GESTURING_OK_MEDIUM_SKIN_TONE = "\u{1F646}\u{1F3FD}";
    const CHARACTER_PERSON_GESTURING_OK_MEDIUM_DARK_SKIN_TONE = "\u{1F646}\u{1F3FE}";
    const CHARACTER_PERSON_GESTURING_OK_DARK_SKIN_TONE = "\u{1F646}\u{1F3FF}";
    const CHARACTER_MAN_GESTURING_OK = "\u{1F646}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_OK_LIGHT_SKIN_TONE = "\u{1F646}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_OK_MEDIUM_LIGHT_SKIN_TONE = "\u{1F646}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_OK_MEDIUM_SKIN_TONE = "\u{1F646}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_OK_MEDIUM_DARK_SKIN_TONE = "\u{1F646}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GESTURING_OK_DARK_SKIN_TONE = "\u{1F646}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_OK = "\u{1F646}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_OK_LIGHT_SKIN_TONE = "\u{1F646}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_OK_MEDIUM_LIGHT_SKIN_TONE = "\u{1F646}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_OK_MEDIUM_SKIN_TONE = "\u{1F646}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_OK_MEDIUM_DARK_SKIN_TONE = "\u{1F646}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GESTURING_OK_DARK_SKIN_TONE = "\u{1F646}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_TIPPING_HAND = "\u{1F481}";
    const CHARACTER_PERSON_TIPPING_HAND_LIGHT_SKIN_TONE = "\u{1F481}\u{1F3FB}";
    const CHARACTER_PERSON_TIPPING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F481}\u{1F3FC}";
    const CHARACTER_PERSON_TIPPING_HAND_MEDIUM_SKIN_TONE = "\u{1F481}\u{1F3FD}";
    const CHARACTER_PERSON_TIPPING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F481}\u{1F3FE}";
    const CHARACTER_PERSON_TIPPING_HAND_DARK_SKIN_TONE = "\u{1F481}\u{1F3FF}";
    const CHARACTER_MAN_TIPPING_HAND = "\u{1F481}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_TIPPING_HAND_LIGHT_SKIN_TONE = "\u{1F481}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_TIPPING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F481}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_TIPPING_HAND_MEDIUM_SKIN_TONE = "\u{1F481}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_TIPPING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F481}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_TIPPING_HAND_DARK_SKIN_TONE = "\u{1F481}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_TIPPING_HAND = "\u{1F481}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_TIPPING_HAND_LIGHT_SKIN_TONE = "\u{1F481}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_TIPPING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F481}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_TIPPING_HAND_MEDIUM_SKIN_TONE = "\u{1F481}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_TIPPING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F481}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_TIPPING_HAND_DARK_SKIN_TONE = "\u{1F481}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_RAISING_HAND = "\u{1F64B}";
    const CHARACTER_PERSON_RAISING_HAND_LIGHT_SKIN_TONE = "\u{1F64B}\u{1F3FB}";
    const CHARACTER_PERSON_RAISING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64B}\u{1F3FC}";
    const CHARACTER_PERSON_RAISING_HAND_MEDIUM_SKIN_TONE = "\u{1F64B}\u{1F3FD}";
    const CHARACTER_PERSON_RAISING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F64B}\u{1F3FE}";
    const CHARACTER_PERSON_RAISING_HAND_DARK_SKIN_TONE = "\u{1F64B}\u{1F3FF}";
    const CHARACTER_MAN_RAISING_HAND = "\u{1F64B}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RAISING_HAND_LIGHT_SKIN_TONE = "\u{1F64B}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RAISING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64B}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RAISING_HAND_MEDIUM_SKIN_TONE = "\u{1F64B}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RAISING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F64B}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RAISING_HAND_DARK_SKIN_TONE = "\u{1F64B}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_RAISING_HAND = "\u{1F64B}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RAISING_HAND_LIGHT_SKIN_TONE = "\u{1F64B}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RAISING_HAND_MEDIUM_LIGHT_SKIN_TONE = "\u{1F64B}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RAISING_HAND_MEDIUM_SKIN_TONE = "\u{1F64B}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RAISING_HAND_MEDIUM_DARK_SKIN_TONE = "\u{1F64B}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RAISING_HAND_DARK_SKIN_TONE = "\u{1F64B}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DEAF_PERSON = "\u{1F9CF}";
    const CHARACTER_DEAF_PERSON_LIGHT_SKIN_TONE = "\u{1F9CF}\u{1F3FB}";
    const CHARACTER_DEAF_PERSON_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CF}\u{1F3FC}";
    const CHARACTER_DEAF_PERSON_MEDIUM_SKIN_TONE = "\u{1F9CF}\u{1F3FD}";
    const CHARACTER_DEAF_PERSON_MEDIUM_DARK_SKIN_TONE = "\u{1F9CF}\u{1F3FE}";
    const CHARACTER_DEAF_PERSON_DARK_SKIN_TONE = "\u{1F9CF}\u{1F3FF}";
    const CHARACTER_DEAF_MAN = "\u{1F9CF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_DEAF_MAN_LIGHT_SKIN_TONE = "\u{1F9CF}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_DEAF_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CF}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_DEAF_MAN_MEDIUM_SKIN_TONE = "\u{1F9CF}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_DEAF_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F9CF}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_DEAF_MAN_DARK_SKIN_TONE = "\u{1F9CF}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_DEAF_WOMAN = "\u{1F9CF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DEAF_WOMAN_LIGHT_SKIN_TONE = "\u{1F9CF}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DEAF_WOMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CF}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DEAF_WOMAN_MEDIUM_SKIN_TONE = "\u{1F9CF}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DEAF_WOMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F9CF}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DEAF_WOMAN_DARK_SKIN_TONE = "\u{1F9CF}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_BOWING = "\u{1F647}";
    const CHARACTER_PERSON_BOWING_LIGHT_SKIN_TONE = "\u{1F647}\u{1F3FB}";
    const CHARACTER_PERSON_BOWING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F647}\u{1F3FC}";
    const CHARACTER_PERSON_BOWING_MEDIUM_SKIN_TONE = "\u{1F647}\u{1F3FD}";
    const CHARACTER_PERSON_BOWING_MEDIUM_DARK_SKIN_TONE = "\u{1F647}\u{1F3FE}";
    const CHARACTER_PERSON_BOWING_DARK_SKIN_TONE = "\u{1F647}\u{1F3FF}";
    const CHARACTER_MAN_BOWING = "\u{1F647}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOWING_LIGHT_SKIN_TONE = "\u{1F647}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOWING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F647}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOWING_MEDIUM_SKIN_TONE = "\u{1F647}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOWING_MEDIUM_DARK_SKIN_TONE = "\u{1F647}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOWING_DARK_SKIN_TONE = "\u{1F647}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_BOWING = "\u{1F647}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOWING_LIGHT_SKIN_TONE = "\u{1F647}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOWING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F647}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOWING_MEDIUM_SKIN_TONE = "\u{1F647}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOWING_MEDIUM_DARK_SKIN_TONE = "\u{1F647}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOWING_DARK_SKIN_TONE = "\u{1F647}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_FACEPALMING = "\u{1F926}";
    const CHARACTER_PERSON_FACEPALMING_LIGHT_SKIN_TONE = "\u{1F926}\u{1F3FB}";
    const CHARACTER_PERSON_FACEPALMING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F926}\u{1F3FC}";
    const CHARACTER_PERSON_FACEPALMING_MEDIUM_SKIN_TONE = "\u{1F926}\u{1F3FD}";
    const CHARACTER_PERSON_FACEPALMING_MEDIUM_DARK_SKIN_TONE = "\u{1F926}\u{1F3FE}";
    const CHARACTER_PERSON_FACEPALMING_DARK_SKIN_TONE = "\u{1F926}\u{1F3FF}";
    const CHARACTER_MAN_FACEPALMING = "\u{1F926}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FACEPALMING_LIGHT_SKIN_TONE = "\u{1F926}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FACEPALMING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F926}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FACEPALMING_MEDIUM_SKIN_TONE = "\u{1F926}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FACEPALMING_MEDIUM_DARK_SKIN_TONE = "\u{1F926}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FACEPALMING_DARK_SKIN_TONE = "\u{1F926}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_FACEPALMING = "\u{1F926}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FACEPALMING_LIGHT_SKIN_TONE = "\u{1F926}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FACEPALMING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F926}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FACEPALMING_MEDIUM_SKIN_TONE = "\u{1F926}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FACEPALMING_MEDIUM_DARK_SKIN_TONE = "\u{1F926}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FACEPALMING_DARK_SKIN_TONE = "\u{1F926}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_SHRUGGING = "\u{1F937}";
    const CHARACTER_PERSON_SHRUGGING_LIGHT_SKIN_TONE = "\u{1F937}\u{1F3FB}";
    const CHARACTER_PERSON_SHRUGGING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F937}\u{1F3FC}";
    const CHARACTER_PERSON_SHRUGGING_MEDIUM_SKIN_TONE = "\u{1F937}\u{1F3FD}";
    const CHARACTER_PERSON_SHRUGGING_MEDIUM_DARK_SKIN_TONE = "\u{1F937}\u{1F3FE}";
    const CHARACTER_PERSON_SHRUGGING_DARK_SKIN_TONE = "\u{1F937}\u{1F3FF}";
    const CHARACTER_MAN_SHRUGGING = "\u{1F937}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SHRUGGING_LIGHT_SKIN_TONE = "\u{1F937}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SHRUGGING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F937}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SHRUGGING_MEDIUM_SKIN_TONE = "\u{1F937}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SHRUGGING_MEDIUM_DARK_SKIN_TONE = "\u{1F937}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SHRUGGING_DARK_SKIN_TONE = "\u{1F937}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_SHRUGGING = "\u{1F937}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SHRUGGING_LIGHT_SKIN_TONE = "\u{1F937}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SHRUGGING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F937}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SHRUGGING_MEDIUM_SKIN_TONE = "\u{1F937}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SHRUGGING_MEDIUM_DARK_SKIN_TONE = "\u{1F937}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SHRUGGING_DARK_SKIN_TONE = "\u{1F937}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    // ##### Emoji subgroup: PERSON-ROLE #####
    const CHARACTER_HEALTH_WORKER = "\u{1F9D1}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_HEALTH_WORKER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_HEALTH_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_HEALTH_WORKER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_HEALTH_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_HEALTH_WORKER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_MAN_HEALTH_WORKER = "\u{1F468}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_MAN_HEALTH_WORKER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_MAN_HEALTH_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_MAN_HEALTH_WORKER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_MAN_HEALTH_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_MAN_HEALTH_WORKER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_WOMAN_HEALTH_WORKER = "\u{1F469}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_WOMAN_HEALTH_WORKER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_WOMAN_HEALTH_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_WOMAN_HEALTH_WORKER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_WOMAN_HEALTH_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_WOMAN_HEALTH_WORKER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2695}\u{FE0F}";
    const CHARACTER_STUDENT = "\u{1F9D1}\u{200D}\u{1F393}";
    const CHARACTER_STUDENT_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F393}";
    const CHARACTER_STUDENT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F393}";
    const CHARACTER_STUDENT_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F393}";
    const CHARACTER_STUDENT_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F393}";
    const CHARACTER_STUDENT_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F393}";
    const CHARACTER_MAN_STUDENT = "\u{1F468}\u{200D}\u{1F393}";
    const CHARACTER_MAN_STUDENT_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F393}";
    const CHARACTER_MAN_STUDENT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F393}";
    const CHARACTER_MAN_STUDENT_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F393}";
    const CHARACTER_MAN_STUDENT_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F393}";
    const CHARACTER_MAN_STUDENT_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F393}";
    const CHARACTER_WOMAN_STUDENT = "\u{1F469}\u{200D}\u{1F393}";
    const CHARACTER_WOMAN_STUDENT_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F393}";
    const CHARACTER_WOMAN_STUDENT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F393}";
    const CHARACTER_WOMAN_STUDENT_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F393}";
    const CHARACTER_WOMAN_STUDENT_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F393}";
    const CHARACTER_WOMAN_STUDENT_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F393}";
    const CHARACTER_TEACHER = "\u{1F9D1}\u{200D}\u{1F3EB}";
    const CHARACTER_TEACHER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F3EB}";
    const CHARACTER_TEACHER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F3EB}";
    const CHARACTER_TEACHER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F3EB}";
    const CHARACTER_TEACHER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F3EB}";
    const CHARACTER_TEACHER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F3EB}";
    const CHARACTER_MAN_TEACHER = "\u{1F468}\u{200D}\u{1F3EB}";
    const CHARACTER_MAN_TEACHER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F3EB}";
    const CHARACTER_MAN_TEACHER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F3EB}";
    const CHARACTER_MAN_TEACHER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F3EB}";
    const CHARACTER_MAN_TEACHER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F3EB}";
    const CHARACTER_MAN_TEACHER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F3EB}";
    const CHARACTER_WOMAN_TEACHER = "\u{1F469}\u{200D}\u{1F3EB}";
    const CHARACTER_WOMAN_TEACHER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F3EB}";
    const CHARACTER_WOMAN_TEACHER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F3EB}";
    const CHARACTER_WOMAN_TEACHER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F3EB}";
    const CHARACTER_WOMAN_TEACHER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F3EB}";
    const CHARACTER_WOMAN_TEACHER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F3EB}";
    const CHARACTER_JUDGE = "\u{1F9D1}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_JUDGE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_JUDGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_JUDGE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_JUDGE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_JUDGE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_MAN_JUDGE = "\u{1F468}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_MAN_JUDGE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_MAN_JUDGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_MAN_JUDGE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_MAN_JUDGE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_MAN_JUDGE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_WOMAN_JUDGE = "\u{1F469}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_WOMAN_JUDGE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_WOMAN_JUDGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_WOMAN_JUDGE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_WOMAN_JUDGE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_WOMAN_JUDGE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2696}\u{FE0F}";
    const CHARACTER_FARMER = "\u{1F9D1}\u{200D}\u{1F33E}";
    const CHARACTER_FARMER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F33E}";
    const CHARACTER_FARMER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F33E}";
    const CHARACTER_FARMER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F33E}";
    const CHARACTER_FARMER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F33E}";
    const CHARACTER_FARMER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F33E}";
    const CHARACTER_MAN_FARMER = "\u{1F468}\u{200D}\u{1F33E}";
    const CHARACTER_MAN_FARMER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F33E}";
    const CHARACTER_MAN_FARMER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F33E}";
    const CHARACTER_MAN_FARMER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F33E}";
    const CHARACTER_MAN_FARMER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F33E}";
    const CHARACTER_MAN_FARMER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F33E}";
    const CHARACTER_WOMAN_FARMER = "\u{1F469}\u{200D}\u{1F33E}";
    const CHARACTER_WOMAN_FARMER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F33E}";
    const CHARACTER_WOMAN_FARMER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F33E}";
    const CHARACTER_WOMAN_FARMER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F33E}";
    const CHARACTER_WOMAN_FARMER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F33E}";
    const CHARACTER_WOMAN_FARMER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F33E}";
    const CHARACTER_COOK = "\u{1F9D1}\u{200D}\u{1F373}";
    const CHARACTER_COOK_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F373}";
    const CHARACTER_COOK_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F373}";
    const CHARACTER_COOK_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F373}";
    const CHARACTER_COOK_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F373}";
    const CHARACTER_COOK_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F373}";
    const CHARACTER_MAN_COOK = "\u{1F468}\u{200D}\u{1F373}";
    const CHARACTER_MAN_COOK_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F373}";
    const CHARACTER_MAN_COOK_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F373}";
    const CHARACTER_MAN_COOK_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F373}";
    const CHARACTER_MAN_COOK_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F373}";
    const CHARACTER_MAN_COOK_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F373}";
    const CHARACTER_WOMAN_COOK = "\u{1F469}\u{200D}\u{1F373}";
    const CHARACTER_WOMAN_COOK_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F373}";
    const CHARACTER_WOMAN_COOK_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F373}";
    const CHARACTER_WOMAN_COOK_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F373}";
    const CHARACTER_WOMAN_COOK_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F373}";
    const CHARACTER_WOMAN_COOK_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F373}";
    const CHARACTER_MECHANIC = "\u{1F9D1}\u{200D}\u{1F527}";
    const CHARACTER_MECHANIC_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F527}";
    const CHARACTER_MECHANIC_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F527}";
    const CHARACTER_MECHANIC_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F527}";
    const CHARACTER_MECHANIC_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F527}";
    const CHARACTER_MECHANIC_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F527}";
    const CHARACTER_MAN_MECHANIC = "\u{1F468}\u{200D}\u{1F527}";
    const CHARACTER_MAN_MECHANIC_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F527}";
    const CHARACTER_MAN_MECHANIC_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F527}";
    const CHARACTER_MAN_MECHANIC_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F527}";
    const CHARACTER_MAN_MECHANIC_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F527}";
    const CHARACTER_MAN_MECHANIC_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F527}";
    const CHARACTER_WOMAN_MECHANIC = "\u{1F469}\u{200D}\u{1F527}";
    const CHARACTER_WOMAN_MECHANIC_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F527}";
    const CHARACTER_WOMAN_MECHANIC_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F527}";
    const CHARACTER_WOMAN_MECHANIC_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F527}";
    const CHARACTER_WOMAN_MECHANIC_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F527}";
    const CHARACTER_WOMAN_MECHANIC_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F527}";
    const CHARACTER_FACTORY_WORKER = "\u{1F9D1}\u{200D}\u{1F3ED}";
    const CHARACTER_FACTORY_WORKER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F3ED}";
    const CHARACTER_FACTORY_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F3ED}";
    const CHARACTER_FACTORY_WORKER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F3ED}";
    const CHARACTER_FACTORY_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F3ED}";
    const CHARACTER_FACTORY_WORKER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F3ED}";
    const CHARACTER_MAN_FACTORY_WORKER = "\u{1F468}\u{200D}\u{1F3ED}";
    const CHARACTER_MAN_FACTORY_WORKER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F3ED}";
    const CHARACTER_MAN_FACTORY_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F3ED}";
    const CHARACTER_MAN_FACTORY_WORKER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F3ED}";
    const CHARACTER_MAN_FACTORY_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F3ED}";
    const CHARACTER_MAN_FACTORY_WORKER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F3ED}";
    const CHARACTER_WOMAN_FACTORY_WORKER = "\u{1F469}\u{200D}\u{1F3ED}";
    const CHARACTER_WOMAN_FACTORY_WORKER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F3ED}";
    const CHARACTER_WOMAN_FACTORY_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F3ED}";
    const CHARACTER_WOMAN_FACTORY_WORKER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F3ED}";
    const CHARACTER_WOMAN_FACTORY_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F3ED}";
    const CHARACTER_WOMAN_FACTORY_WORKER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F3ED}";
    const CHARACTER_OFFICE_WORKER = "\u{1F9D1}\u{200D}\u{1F4BC}";
    const CHARACTER_OFFICE_WORKER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F4BC}";
    const CHARACTER_OFFICE_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F4BC}";
    const CHARACTER_OFFICE_WORKER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F4BC}";
    const CHARACTER_OFFICE_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F4BC}";
    const CHARACTER_OFFICE_WORKER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F4BC}";
    const CHARACTER_MAN_OFFICE_WORKER = "\u{1F468}\u{200D}\u{1F4BC}";
    const CHARACTER_MAN_OFFICE_WORKER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F4BC}";
    const CHARACTER_MAN_OFFICE_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F4BC}";
    const CHARACTER_MAN_OFFICE_WORKER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F4BC}";
    const CHARACTER_MAN_OFFICE_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F4BC}";
    const CHARACTER_MAN_OFFICE_WORKER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F4BC}";
    const CHARACTER_WOMAN_OFFICE_WORKER = "\u{1F469}\u{200D}\u{1F4BC}";
    const CHARACTER_WOMAN_OFFICE_WORKER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F4BC}";
    const CHARACTER_WOMAN_OFFICE_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F4BC}";
    const CHARACTER_WOMAN_OFFICE_WORKER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F4BC}";
    const CHARACTER_WOMAN_OFFICE_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F4BC}";
    const CHARACTER_WOMAN_OFFICE_WORKER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F4BC}";
    const CHARACTER_SCIENTIST = "\u{1F9D1}\u{200D}\u{1F52C}";
    const CHARACTER_SCIENTIST_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F52C}";
    const CHARACTER_SCIENTIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F52C}";
    const CHARACTER_SCIENTIST_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F52C}";
    const CHARACTER_SCIENTIST_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F52C}";
    const CHARACTER_SCIENTIST_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F52C}";
    const CHARACTER_MAN_SCIENTIST = "\u{1F468}\u{200D}\u{1F52C}";
    const CHARACTER_MAN_SCIENTIST_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F52C}";
    const CHARACTER_MAN_SCIENTIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F52C}";
    const CHARACTER_MAN_SCIENTIST_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F52C}";
    const CHARACTER_MAN_SCIENTIST_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F52C}";
    const CHARACTER_MAN_SCIENTIST_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F52C}";
    const CHARACTER_WOMAN_SCIENTIST = "\u{1F469}\u{200D}\u{1F52C}";
    const CHARACTER_WOMAN_SCIENTIST_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F52C}";
    const CHARACTER_WOMAN_SCIENTIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F52C}";
    const CHARACTER_WOMAN_SCIENTIST_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F52C}";
    const CHARACTER_WOMAN_SCIENTIST_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F52C}";
    const CHARACTER_WOMAN_SCIENTIST_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F52C}";
    const CHARACTER_TECHNOLOGIST = "\u{1F9D1}\u{200D}\u{1F4BB}";
    const CHARACTER_TECHNOLOGIST_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F4BB}";
    const CHARACTER_TECHNOLOGIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F4BB}";
    const CHARACTER_TECHNOLOGIST_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F4BB}";
    const CHARACTER_TECHNOLOGIST_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F4BB}";
    const CHARACTER_TECHNOLOGIST_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F4BB}";
    const CHARACTER_MAN_TECHNOLOGIST = "\u{1F468}\u{200D}\u{1F4BB}";
    const CHARACTER_MAN_TECHNOLOGIST_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F4BB}";
    const CHARACTER_MAN_TECHNOLOGIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F4BB}";
    const CHARACTER_MAN_TECHNOLOGIST_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F4BB}";
    const CHARACTER_MAN_TECHNOLOGIST_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F4BB}";
    const CHARACTER_MAN_TECHNOLOGIST_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F4BB}";
    const CHARACTER_WOMAN_TECHNOLOGIST = "\u{1F469}\u{200D}\u{1F4BB}";
    const CHARACTER_WOMAN_TECHNOLOGIST_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F4BB}";
    const CHARACTER_WOMAN_TECHNOLOGIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F4BB}";
    const CHARACTER_WOMAN_TECHNOLOGIST_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F4BB}";
    const CHARACTER_WOMAN_TECHNOLOGIST_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F4BB}";
    const CHARACTER_WOMAN_TECHNOLOGIST_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F4BB}";
    const CHARACTER_SINGER = "\u{1F9D1}\u{200D}\u{1F3A4}";
    const CHARACTER_SINGER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F3A4}";
    const CHARACTER_SINGER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F3A4}";
    const CHARACTER_SINGER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F3A4}";
    const CHARACTER_SINGER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F3A4}";
    const CHARACTER_SINGER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F3A4}";
    const CHARACTER_MAN_SINGER = "\u{1F468}\u{200D}\u{1F3A4}";
    const CHARACTER_MAN_SINGER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F3A4}";
    const CHARACTER_MAN_SINGER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F3A4}";
    const CHARACTER_MAN_SINGER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F3A4}";
    const CHARACTER_MAN_SINGER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F3A4}";
    const CHARACTER_MAN_SINGER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F3A4}";
    const CHARACTER_WOMAN_SINGER = "\u{1F469}\u{200D}\u{1F3A4}";
    const CHARACTER_WOMAN_SINGER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F3A4}";
    const CHARACTER_WOMAN_SINGER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F3A4}";
    const CHARACTER_WOMAN_SINGER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F3A4}";
    const CHARACTER_WOMAN_SINGER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F3A4}";
    const CHARACTER_WOMAN_SINGER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F3A4}";
    const CHARACTER_ARTIST = "\u{1F9D1}\u{200D}\u{1F3A8}";
    const CHARACTER_ARTIST_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F3A8}";
    const CHARACTER_ARTIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F3A8}";
    const CHARACTER_ARTIST_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F3A8}";
    const CHARACTER_ARTIST_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F3A8}";
    const CHARACTER_ARTIST_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F3A8}";
    const CHARACTER_MAN_ARTIST = "\u{1F468}\u{200D}\u{1F3A8}";
    const CHARACTER_MAN_ARTIST_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F3A8}";
    const CHARACTER_MAN_ARTIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F3A8}";
    const CHARACTER_MAN_ARTIST_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F3A8}";
    const CHARACTER_MAN_ARTIST_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F3A8}";
    const CHARACTER_MAN_ARTIST_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F3A8}";
    const CHARACTER_WOMAN_ARTIST = "\u{1F469}\u{200D}\u{1F3A8}";
    const CHARACTER_WOMAN_ARTIST_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F3A8}";
    const CHARACTER_WOMAN_ARTIST_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F3A8}";
    const CHARACTER_WOMAN_ARTIST_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F3A8}";
    const CHARACTER_WOMAN_ARTIST_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F3A8}";
    const CHARACTER_WOMAN_ARTIST_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F3A8}";
    const CHARACTER_PILOT = "\u{1F9D1}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_PILOT_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_PILOT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_PILOT_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_PILOT_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_PILOT_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_MAN_PILOT = "\u{1F468}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_MAN_PILOT_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_MAN_PILOT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_MAN_PILOT_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_MAN_PILOT_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_MAN_PILOT_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_WOMAN_PILOT = "\u{1F469}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_WOMAN_PILOT_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_WOMAN_PILOT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_WOMAN_PILOT_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_WOMAN_PILOT_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_WOMAN_PILOT_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2708}\u{FE0F}";
    const CHARACTER_ASTRONAUT = "\u{1F9D1}\u{200D}\u{1F680}";
    const CHARACTER_ASTRONAUT_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F680}";
    const CHARACTER_ASTRONAUT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F680}";
    const CHARACTER_ASTRONAUT_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F680}";
    const CHARACTER_ASTRONAUT_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F680}";
    const CHARACTER_ASTRONAUT_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F680}";
    const CHARACTER_MAN_ASTRONAUT = "\u{1F468}\u{200D}\u{1F680}";
    const CHARACTER_MAN_ASTRONAUT_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F680}";
    const CHARACTER_MAN_ASTRONAUT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F680}";
    const CHARACTER_MAN_ASTRONAUT_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F680}";
    const CHARACTER_MAN_ASTRONAUT_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F680}";
    const CHARACTER_MAN_ASTRONAUT_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F680}";
    const CHARACTER_WOMAN_ASTRONAUT = "\u{1F469}\u{200D}\u{1F680}";
    const CHARACTER_WOMAN_ASTRONAUT_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F680}";
    const CHARACTER_WOMAN_ASTRONAUT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F680}";
    const CHARACTER_WOMAN_ASTRONAUT_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F680}";
    const CHARACTER_WOMAN_ASTRONAUT_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F680}";
    const CHARACTER_WOMAN_ASTRONAUT_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F680}";
    const CHARACTER_FIREFIGHTER = "\u{1F9D1}\u{200D}\u{1F692}";
    const CHARACTER_FIREFIGHTER_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F692}";
    const CHARACTER_FIREFIGHTER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F692}";
    const CHARACTER_FIREFIGHTER_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F692}";
    const CHARACTER_FIREFIGHTER_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F692}";
    const CHARACTER_FIREFIGHTER_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F692}";
    const CHARACTER_MAN_FIREFIGHTER = "\u{1F468}\u{200D}\u{1F692}";
    const CHARACTER_MAN_FIREFIGHTER_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F692}";
    const CHARACTER_MAN_FIREFIGHTER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F692}";
    const CHARACTER_MAN_FIREFIGHTER_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F692}";
    const CHARACTER_MAN_FIREFIGHTER_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F692}";
    const CHARACTER_MAN_FIREFIGHTER_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F692}";
    const CHARACTER_WOMAN_FIREFIGHTER = "\u{1F469}\u{200D}\u{1F692}";
    const CHARACTER_WOMAN_FIREFIGHTER_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F692}";
    const CHARACTER_WOMAN_FIREFIGHTER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F692}";
    const CHARACTER_WOMAN_FIREFIGHTER_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F692}";
    const CHARACTER_WOMAN_FIREFIGHTER_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F692}";
    const CHARACTER_WOMAN_FIREFIGHTER_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F692}";
    const CHARACTER_POLICE_OFFICER = "\u{1F46E}";
    const CHARACTER_POLICE_OFFICER_LIGHT_SKIN_TONE = "\u{1F46E}\u{1F3FB}";
    const CHARACTER_POLICE_OFFICER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F46E}\u{1F3FC}";
    const CHARACTER_POLICE_OFFICER_MEDIUM_SKIN_TONE = "\u{1F46E}\u{1F3FD}";
    const CHARACTER_POLICE_OFFICER_MEDIUM_DARK_SKIN_TONE = "\u{1F46E}\u{1F3FE}";
    const CHARACTER_POLICE_OFFICER_DARK_SKIN_TONE = "\u{1F46E}\u{1F3FF}";
    const CHARACTER_MAN_POLICE_OFFICER = "\u{1F46E}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POLICE_OFFICER_LIGHT_SKIN_TONE = "\u{1F46E}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POLICE_OFFICER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F46E}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POLICE_OFFICER_MEDIUM_SKIN_TONE = "\u{1F46E}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POLICE_OFFICER_MEDIUM_DARK_SKIN_TONE = "\u{1F46E}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_POLICE_OFFICER_DARK_SKIN_TONE = "\u{1F46E}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_POLICE_OFFICER = "\u{1F46E}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POLICE_OFFICER_LIGHT_SKIN_TONE = "\u{1F46E}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POLICE_OFFICER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F46E}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POLICE_OFFICER_MEDIUM_SKIN_TONE = "\u{1F46E}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POLICE_OFFICER_MEDIUM_DARK_SKIN_TONE = "\u{1F46E}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_POLICE_OFFICER_DARK_SKIN_TONE = "\u{1F46E}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_DETECTIVE = "\u{1F575}\u{FE0F}";
    const CHARACTER_DETECTIVE_LIGHT_SKIN_TONE = "\u{1F575}\u{1F3FB}";
    const CHARACTER_DETECTIVE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F575}\u{1F3FC}";
    const CHARACTER_DETECTIVE_MEDIUM_SKIN_TONE = "\u{1F575}\u{1F3FD}";
    const CHARACTER_DETECTIVE_MEDIUM_DARK_SKIN_TONE = "\u{1F575}\u{1F3FE}";
    const CHARACTER_DETECTIVE_DARK_SKIN_TONE = "\u{1F575}\u{1F3FF}";
    const CHARACTER_MAN_DETECTIVE = "\u{1F575}\u{FE0F}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DETECTIVE_LIGHT_SKIN_TONE = "\u{1F575}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DETECTIVE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F575}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DETECTIVE_MEDIUM_SKIN_TONE = "\u{1F575}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DETECTIVE_MEDIUM_DARK_SKIN_TONE = "\u{1F575}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_DETECTIVE_DARK_SKIN_TONE = "\u{1F575}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_DETECTIVE = "\u{1F575}\u{FE0F}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DETECTIVE_LIGHT_SKIN_TONE = "\u{1F575}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DETECTIVE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F575}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DETECTIVE_MEDIUM_SKIN_TONE = "\u{1F575}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DETECTIVE_MEDIUM_DARK_SKIN_TONE = "\u{1F575}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DETECTIVE_DARK_SKIN_TONE = "\u{1F575}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_GUARD = "\u{1F482}";
    const CHARACTER_GUARD_LIGHT_SKIN_TONE = "\u{1F482}\u{1F3FB}";
    const CHARACTER_GUARD_MEDIUM_LIGHT_SKIN_TONE = "\u{1F482}\u{1F3FC}";
    const CHARACTER_GUARD_MEDIUM_SKIN_TONE = "\u{1F482}\u{1F3FD}";
    const CHARACTER_GUARD_MEDIUM_DARK_SKIN_TONE = "\u{1F482}\u{1F3FE}";
    const CHARACTER_GUARD_DARK_SKIN_TONE = "\u{1F482}\u{1F3FF}";
    const CHARACTER_MAN_GUARD = "\u{1F482}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GUARD_LIGHT_SKIN_TONE = "\u{1F482}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GUARD_MEDIUM_LIGHT_SKIN_TONE = "\u{1F482}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GUARD_MEDIUM_SKIN_TONE = "\u{1F482}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GUARD_MEDIUM_DARK_SKIN_TONE = "\u{1F482}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GUARD_DARK_SKIN_TONE = "\u{1F482}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GUARD = "\u{1F482}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GUARD_LIGHT_SKIN_TONE = "\u{1F482}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GUARD_MEDIUM_LIGHT_SKIN_TONE = "\u{1F482}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GUARD_MEDIUM_SKIN_TONE = "\u{1F482}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GUARD_MEDIUM_DARK_SKIN_TONE = "\u{1F482}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GUARD_DARK_SKIN_TONE = "\u{1F482}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_NINJA = "\u{1F977}";
    const CHARACTER_NINJA_LIGHT_SKIN_TONE = "\u{1F977}\u{1F3FB}";
    const CHARACTER_NINJA_MEDIUM_LIGHT_SKIN_TONE = "\u{1F977}\u{1F3FC}";
    const CHARACTER_NINJA_MEDIUM_SKIN_TONE = "\u{1F977}\u{1F3FD}";
    const CHARACTER_NINJA_MEDIUM_DARK_SKIN_TONE = "\u{1F977}\u{1F3FE}";
    const CHARACTER_NINJA_DARK_SKIN_TONE = "\u{1F977}\u{1F3FF}";
    const CHARACTER_CONSTRUCTION_WORKER = "\u{1F477}";
    const CHARACTER_CONSTRUCTION_WORKER_LIGHT_SKIN_TONE = "\u{1F477}\u{1F3FB}";
    const CHARACTER_CONSTRUCTION_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F477}\u{1F3FC}";
    const CHARACTER_CONSTRUCTION_WORKER_MEDIUM_SKIN_TONE = "\u{1F477}\u{1F3FD}";
    const CHARACTER_CONSTRUCTION_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F477}\u{1F3FE}";
    const CHARACTER_CONSTRUCTION_WORKER_DARK_SKIN_TONE = "\u{1F477}\u{1F3FF}";
    const CHARACTER_MAN_CONSTRUCTION_WORKER = "\u{1F477}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CONSTRUCTION_WORKER_LIGHT_SKIN_TONE = "\u{1F477}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CONSTRUCTION_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F477}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CONSTRUCTION_WORKER_MEDIUM_SKIN_TONE = "\u{1F477}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CONSTRUCTION_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F477}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CONSTRUCTION_WORKER_DARK_SKIN_TONE = "\u{1F477}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_CONSTRUCTION_WORKER = "\u{1F477}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CONSTRUCTION_WORKER_LIGHT_SKIN_TONE = "\u{1F477}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CONSTRUCTION_WORKER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F477}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CONSTRUCTION_WORKER_MEDIUM_SKIN_TONE = "\u{1F477}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CONSTRUCTION_WORKER_MEDIUM_DARK_SKIN_TONE = "\u{1F477}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CONSTRUCTION_WORKER_DARK_SKIN_TONE = "\u{1F477}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_WITH_CROWN = "\u{1FAC5}";
    const CHARACTER_PERSON_WITH_CROWN_LIGHT_SKIN_TONE = "\u{1FAC5}\u{1F3FB}";
    const CHARACTER_PERSON_WITH_CROWN_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAC5}\u{1F3FC}";
    const CHARACTER_PERSON_WITH_CROWN_MEDIUM_SKIN_TONE = "\u{1FAC5}\u{1F3FD}";
    const CHARACTER_PERSON_WITH_CROWN_MEDIUM_DARK_SKIN_TONE = "\u{1FAC5}\u{1F3FE}";
    const CHARACTER_PERSON_WITH_CROWN_DARK_SKIN_TONE = "\u{1FAC5}\u{1F3FF}";
    const CHARACTER_PRINCE = "\u{1F934}";
    const CHARACTER_PRINCE_LIGHT_SKIN_TONE = "\u{1F934}\u{1F3FB}";
    const CHARACTER_PRINCE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F934}\u{1F3FC}";
    const CHARACTER_PRINCE_MEDIUM_SKIN_TONE = "\u{1F934}\u{1F3FD}";
    const CHARACTER_PRINCE_MEDIUM_DARK_SKIN_TONE = "\u{1F934}\u{1F3FE}";
    const CHARACTER_PRINCE_DARK_SKIN_TONE = "\u{1F934}\u{1F3FF}";
    const CHARACTER_PRINCESS = "\u{1F478}";
    const CHARACTER_PRINCESS_LIGHT_SKIN_TONE = "\u{1F478}\u{1F3FB}";
    const CHARACTER_PRINCESS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F478}\u{1F3FC}";
    const CHARACTER_PRINCESS_MEDIUM_SKIN_TONE = "\u{1F478}\u{1F3FD}";
    const CHARACTER_PRINCESS_MEDIUM_DARK_SKIN_TONE = "\u{1F478}\u{1F3FE}";
    const CHARACTER_PRINCESS_DARK_SKIN_TONE = "\u{1F478}\u{1F3FF}";
    const CHARACTER_PERSON_WEARING_TURBAN = "\u{1F473}";
    const CHARACTER_PERSON_WEARING_TURBAN_LIGHT_SKIN_TONE = "\u{1F473}\u{1F3FB}";
    const CHARACTER_PERSON_WEARING_TURBAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F473}\u{1F3FC}";
    const CHARACTER_PERSON_WEARING_TURBAN_MEDIUM_SKIN_TONE = "\u{1F473}\u{1F3FD}";
    const CHARACTER_PERSON_WEARING_TURBAN_MEDIUM_DARK_SKIN_TONE = "\u{1F473}\u{1F3FE}";
    const CHARACTER_PERSON_WEARING_TURBAN_DARK_SKIN_TONE = "\u{1F473}\u{1F3FF}";
    const CHARACTER_MAN_WEARING_TURBAN = "\u{1F473}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WEARING_TURBAN_LIGHT_SKIN_TONE = "\u{1F473}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WEARING_TURBAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F473}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WEARING_TURBAN_MEDIUM_SKIN_TONE = "\u{1F473}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WEARING_TURBAN_MEDIUM_DARK_SKIN_TONE = "\u{1F473}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WEARING_TURBAN_DARK_SKIN_TONE = "\u{1F473}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_WEARING_TURBAN = "\u{1F473}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WEARING_TURBAN_LIGHT_SKIN_TONE = "\u{1F473}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WEARING_TURBAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F473}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WEARING_TURBAN_MEDIUM_SKIN_TONE = "\u{1F473}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WEARING_TURBAN_MEDIUM_DARK_SKIN_TONE = "\u{1F473}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WEARING_TURBAN_DARK_SKIN_TONE = "\u{1F473}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_WITH_SKULLCAP = "\u{1F472}";
    const CHARACTER_PERSON_WITH_SKULLCAP_LIGHT_SKIN_TONE = "\u{1F472}\u{1F3FB}";
    const CHARACTER_PERSON_WITH_SKULLCAP_MEDIUM_LIGHT_SKIN_TONE = "\u{1F472}\u{1F3FC}";
    const CHARACTER_PERSON_WITH_SKULLCAP_MEDIUM_SKIN_TONE = "\u{1F472}\u{1F3FD}";
    const CHARACTER_PERSON_WITH_SKULLCAP_MEDIUM_DARK_SKIN_TONE = "\u{1F472}\u{1F3FE}";
    const CHARACTER_PERSON_WITH_SKULLCAP_DARK_SKIN_TONE = "\u{1F472}\u{1F3FF}";
    const CHARACTER_WOMAN_WITH_HEADSCARF = "\u{1F9D5}";
    const CHARACTER_WOMAN_WITH_HEADSCARF_LIGHT_SKIN_TONE = "\u{1F9D5}\u{1F3FB}";
    const CHARACTER_WOMAN_WITH_HEADSCARF_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D5}\u{1F3FC}";
    const CHARACTER_WOMAN_WITH_HEADSCARF_MEDIUM_SKIN_TONE = "\u{1F9D5}\u{1F3FD}";
    const CHARACTER_WOMAN_WITH_HEADSCARF_MEDIUM_DARK_SKIN_TONE = "\u{1F9D5}\u{1F3FE}";
    const CHARACTER_WOMAN_WITH_HEADSCARF_DARK_SKIN_TONE = "\u{1F9D5}\u{1F3FF}";
    const CHARACTER_PERSON_IN_TUXEDO = "\u{1F935}";
    const CHARACTER_PERSON_IN_TUXEDO_LIGHT_SKIN_TONE = "\u{1F935}\u{1F3FB}";
    const CHARACTER_PERSON_IN_TUXEDO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F935}\u{1F3FC}";
    const CHARACTER_PERSON_IN_TUXEDO_MEDIUM_SKIN_TONE = "\u{1F935}\u{1F3FD}";
    const CHARACTER_PERSON_IN_TUXEDO_MEDIUM_DARK_SKIN_TONE = "\u{1F935}\u{1F3FE}";
    const CHARACTER_PERSON_IN_TUXEDO_DARK_SKIN_TONE = "\u{1F935}\u{1F3FF}";
    const CHARACTER_MAN_IN_TUXEDO = "\u{1F935}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_TUXEDO_LIGHT_SKIN_TONE = "\u{1F935}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_TUXEDO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F935}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_TUXEDO_MEDIUM_SKIN_TONE = "\u{1F935}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_TUXEDO_MEDIUM_DARK_SKIN_TONE = "\u{1F935}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_TUXEDO_DARK_SKIN_TONE = "\u{1F935}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_IN_TUXEDO = "\u{1F935}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_TUXEDO_LIGHT_SKIN_TONE = "\u{1F935}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_TUXEDO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F935}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_TUXEDO_MEDIUM_SKIN_TONE = "\u{1F935}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_TUXEDO_MEDIUM_DARK_SKIN_TONE = "\u{1F935}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_TUXEDO_DARK_SKIN_TONE = "\u{1F935}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_WITH_VEIL = "\u{1F470}";
    const CHARACTER_PERSON_WITH_VEIL_LIGHT_SKIN_TONE = "\u{1F470}\u{1F3FB}";
    const CHARACTER_PERSON_WITH_VEIL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F470}\u{1F3FC}";
    const CHARACTER_PERSON_WITH_VEIL_MEDIUM_SKIN_TONE = "\u{1F470}\u{1F3FD}";
    const CHARACTER_PERSON_WITH_VEIL_MEDIUM_DARK_SKIN_TONE = "\u{1F470}\u{1F3FE}";
    const CHARACTER_PERSON_WITH_VEIL_DARK_SKIN_TONE = "\u{1F470}\u{1F3FF}";
    const CHARACTER_MAN_WITH_VEIL = "\u{1F470}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WITH_VEIL_LIGHT_SKIN_TONE = "\u{1F470}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WITH_VEIL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F470}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WITH_VEIL_MEDIUM_SKIN_TONE = "\u{1F470}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WITH_VEIL_MEDIUM_DARK_SKIN_TONE = "\u{1F470}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WITH_VEIL_DARK_SKIN_TONE = "\u{1F470}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_WITH_VEIL = "\u{1F470}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WITH_VEIL_LIGHT_SKIN_TONE = "\u{1F470}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WITH_VEIL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F470}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WITH_VEIL_MEDIUM_SKIN_TONE = "\u{1F470}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WITH_VEIL_MEDIUM_DARK_SKIN_TONE = "\u{1F470}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WITH_VEIL_DARK_SKIN_TONE = "\u{1F470}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PREGNANT_WOMAN = "\u{1F930}";
    const CHARACTER_PREGNANT_WOMAN_LIGHT_SKIN_TONE = "\u{1F930}\u{1F3FB}";
    const CHARACTER_PREGNANT_WOMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F930}\u{1F3FC}";
    const CHARACTER_PREGNANT_WOMAN_MEDIUM_SKIN_TONE = "\u{1F930}\u{1F3FD}";
    const CHARACTER_PREGNANT_WOMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F930}\u{1F3FE}";
    const CHARACTER_PREGNANT_WOMAN_DARK_SKIN_TONE = "\u{1F930}\u{1F3FF}";
    const CHARACTER_PREGNANT_MAN = "\u{1FAC3}";
    const CHARACTER_PREGNANT_MAN_LIGHT_SKIN_TONE = "\u{1FAC3}\u{1F3FB}";
    const CHARACTER_PREGNANT_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAC3}\u{1F3FC}";
    const CHARACTER_PREGNANT_MAN_MEDIUM_SKIN_TONE = "\u{1FAC3}\u{1F3FD}";
    const CHARACTER_PREGNANT_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1FAC3}\u{1F3FE}";
    const CHARACTER_PREGNANT_MAN_DARK_SKIN_TONE = "\u{1FAC3}\u{1F3FF}";
    const CHARACTER_PREGNANT_PERSON = "\u{1FAC4}";
    const CHARACTER_PREGNANT_PERSON_LIGHT_SKIN_TONE = "\u{1FAC4}\u{1F3FB}";
    const CHARACTER_PREGNANT_PERSON_MEDIUM_LIGHT_SKIN_TONE = "\u{1FAC4}\u{1F3FC}";
    const CHARACTER_PREGNANT_PERSON_MEDIUM_SKIN_TONE = "\u{1FAC4}\u{1F3FD}";
    const CHARACTER_PREGNANT_PERSON_MEDIUM_DARK_SKIN_TONE = "\u{1FAC4}\u{1F3FE}";
    const CHARACTER_PREGNANT_PERSON_DARK_SKIN_TONE = "\u{1FAC4}\u{1F3FF}";
    const CHARACTER_BREAST_FEEDING = "\u{1F931}";
    const CHARACTER_BREAST_FEEDING_LIGHT_SKIN_TONE = "\u{1F931}\u{1F3FB}";
    const CHARACTER_BREAST_FEEDING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F931}\u{1F3FC}";
    const CHARACTER_BREAST_FEEDING_MEDIUM_SKIN_TONE = "\u{1F931}\u{1F3FD}";
    const CHARACTER_BREAST_FEEDING_MEDIUM_DARK_SKIN_TONE = "\u{1F931}\u{1F3FE}";
    const CHARACTER_BREAST_FEEDING_DARK_SKIN_TONE = "\u{1F931}\u{1F3FF}";
    const CHARACTER_WOMAN_FEEDING_BABY = "\u{1F469}\u{200D}\u{1F37C}";
    const CHARACTER_WOMAN_FEEDING_BABY_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F37C}";
    const CHARACTER_WOMAN_FEEDING_BABY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F37C}";
    const CHARACTER_WOMAN_FEEDING_BABY_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F37C}";
    const CHARACTER_WOMAN_FEEDING_BABY_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F37C}";
    const CHARACTER_WOMAN_FEEDING_BABY_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F37C}";
    const CHARACTER_MAN_FEEDING_BABY = "\u{1F468}\u{200D}\u{1F37C}";
    const CHARACTER_MAN_FEEDING_BABY_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F37C}";
    const CHARACTER_MAN_FEEDING_BABY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F37C}";
    const CHARACTER_MAN_FEEDING_BABY_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F37C}";
    const CHARACTER_MAN_FEEDING_BABY_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F37C}";
    const CHARACTER_MAN_FEEDING_BABY_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F37C}";
    const CHARACTER_PERSON_FEEDING_BABY = "\u{1F9D1}\u{200D}\u{1F37C}";
    const CHARACTER_PERSON_FEEDING_BABY_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F37C}";
    const CHARACTER_PERSON_FEEDING_BABY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F37C}";
    const CHARACTER_PERSON_FEEDING_BABY_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F37C}";
    const CHARACTER_PERSON_FEEDING_BABY_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F37C}";
    const CHARACTER_PERSON_FEEDING_BABY_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F37C}";
    // ##### Emoji subgroup: PERSON-FANTASY #####
    const CHARACTER_BABY_ANGEL = "\u{1F47C}";
    const CHARACTER_BABY_ANGEL_LIGHT_SKIN_TONE = "\u{1F47C}\u{1F3FB}";
    const CHARACTER_BABY_ANGEL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F47C}\u{1F3FC}";
    const CHARACTER_BABY_ANGEL_MEDIUM_SKIN_TONE = "\u{1F47C}\u{1F3FD}";
    const CHARACTER_BABY_ANGEL_MEDIUM_DARK_SKIN_TONE = "\u{1F47C}\u{1F3FE}";
    const CHARACTER_BABY_ANGEL_DARK_SKIN_TONE = "\u{1F47C}\u{1F3FF}";
    const CHARACTER_SANTA_CLAUS = "\u{1F385}";
    const CHARACTER_SANTA_CLAUS_LIGHT_SKIN_TONE = "\u{1F385}\u{1F3FB}";
    const CHARACTER_SANTA_CLAUS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F385}\u{1F3FC}";
    const CHARACTER_SANTA_CLAUS_MEDIUM_SKIN_TONE = "\u{1F385}\u{1F3FD}";
    const CHARACTER_SANTA_CLAUS_MEDIUM_DARK_SKIN_TONE = "\u{1F385}\u{1F3FE}";
    const CHARACTER_SANTA_CLAUS_DARK_SKIN_TONE = "\u{1F385}\u{1F3FF}";
    const CHARACTER_MRS_CLAUS = "\u{1F936}";
    const CHARACTER_MRS_CLAUS_LIGHT_SKIN_TONE = "\u{1F936}\u{1F3FB}";
    const CHARACTER_MRS_CLAUS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F936}\u{1F3FC}";
    const CHARACTER_MRS_CLAUS_MEDIUM_SKIN_TONE = "\u{1F936}\u{1F3FD}";
    const CHARACTER_MRS_CLAUS_MEDIUM_DARK_SKIN_TONE = "\u{1F936}\u{1F3FE}";
    const CHARACTER_MRS_CLAUS_DARK_SKIN_TONE = "\u{1F936}\u{1F3FF}";
    const CHARACTER_MX_CLAUS = "\u{1F9D1}\u{200D}\u{1F384}";
    const CHARACTER_MX_CLAUS_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F384}";
    const CHARACTER_MX_CLAUS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F384}";
    const CHARACTER_MX_CLAUS_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F384}";
    const CHARACTER_MX_CLAUS_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F384}";
    const CHARACTER_MX_CLAUS_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F384}";
    const CHARACTER_SUPERHERO = "\u{1F9B8}";
    const CHARACTER_SUPERHERO_LIGHT_SKIN_TONE = "\u{1F9B8}\u{1F3FB}";
    const CHARACTER_SUPERHERO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B8}\u{1F3FC}";
    const CHARACTER_SUPERHERO_MEDIUM_SKIN_TONE = "\u{1F9B8}\u{1F3FD}";
    const CHARACTER_SUPERHERO_MEDIUM_DARK_SKIN_TONE = "\u{1F9B8}\u{1F3FE}";
    const CHARACTER_SUPERHERO_DARK_SKIN_TONE = "\u{1F9B8}\u{1F3FF}";
    const CHARACTER_MAN_SUPERHERO = "\u{1F9B8}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERHERO_LIGHT_SKIN_TONE = "\u{1F9B8}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERHERO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B8}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERHERO_MEDIUM_SKIN_TONE = "\u{1F9B8}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERHERO_MEDIUM_DARK_SKIN_TONE = "\u{1F9B8}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERHERO_DARK_SKIN_TONE = "\u{1F9B8}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERHERO = "\u{1F9B8}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERHERO_LIGHT_SKIN_TONE = "\u{1F9B8}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERHERO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B8}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERHERO_MEDIUM_SKIN_TONE = "\u{1F9B8}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERHERO_MEDIUM_DARK_SKIN_TONE = "\u{1F9B8}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERHERO_DARK_SKIN_TONE = "\u{1F9B8}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_SUPERVILLAIN = "\u{1F9B9}";
    const CHARACTER_SUPERVILLAIN_LIGHT_SKIN_TONE = "\u{1F9B9}\u{1F3FB}";
    const CHARACTER_SUPERVILLAIN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B9}\u{1F3FC}";
    const CHARACTER_SUPERVILLAIN_MEDIUM_SKIN_TONE = "\u{1F9B9}\u{1F3FD}";
    const CHARACTER_SUPERVILLAIN_MEDIUM_DARK_SKIN_TONE = "\u{1F9B9}\u{1F3FE}";
    const CHARACTER_SUPERVILLAIN_DARK_SKIN_TONE = "\u{1F9B9}\u{1F3FF}";
    const CHARACTER_MAN_SUPERVILLAIN = "\u{1F9B9}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERVILLAIN_LIGHT_SKIN_TONE = "\u{1F9B9}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERVILLAIN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B9}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERVILLAIN_MEDIUM_SKIN_TONE = "\u{1F9B9}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERVILLAIN_MEDIUM_DARK_SKIN_TONE = "\u{1F9B9}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SUPERVILLAIN_DARK_SKIN_TONE = "\u{1F9B9}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERVILLAIN = "\u{1F9B9}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERVILLAIN_LIGHT_SKIN_TONE = "\u{1F9B9}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERVILLAIN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9B9}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERVILLAIN_MEDIUM_SKIN_TONE = "\u{1F9B9}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERVILLAIN_MEDIUM_DARK_SKIN_TONE = "\u{1F9B9}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SUPERVILLAIN_DARK_SKIN_TONE = "\u{1F9B9}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MAGE = "\u{1F9D9}";
    const CHARACTER_MAGE_LIGHT_SKIN_TONE = "\u{1F9D9}\u{1F3FB}";
    const CHARACTER_MAGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D9}\u{1F3FC}";
    const CHARACTER_MAGE_MEDIUM_SKIN_TONE = "\u{1F9D9}\u{1F3FD}";
    const CHARACTER_MAGE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D9}\u{1F3FE}";
    const CHARACTER_MAGE_DARK_SKIN_TONE = "\u{1F9D9}\u{1F3FF}";
    const CHARACTER_MAN_MAGE = "\u{1F9D9}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MAGE_LIGHT_SKIN_TONE = "\u{1F9D9}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MAGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D9}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MAGE_MEDIUM_SKIN_TONE = "\u{1F9D9}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MAGE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D9}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MAGE_DARK_SKIN_TONE = "\u{1F9D9}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_MAGE = "\u{1F9D9}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MAGE_LIGHT_SKIN_TONE = "\u{1F9D9}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MAGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D9}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MAGE_MEDIUM_SKIN_TONE = "\u{1F9D9}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MAGE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D9}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MAGE_DARK_SKIN_TONE = "\u{1F9D9}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_FAIRY = "\u{1F9DA}";
    const CHARACTER_FAIRY_LIGHT_SKIN_TONE = "\u{1F9DA}\u{1F3FB}";
    const CHARACTER_FAIRY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DA}\u{1F3FC}";
    const CHARACTER_FAIRY_MEDIUM_SKIN_TONE = "\u{1F9DA}\u{1F3FD}";
    const CHARACTER_FAIRY_MEDIUM_DARK_SKIN_TONE = "\u{1F9DA}\u{1F3FE}";
    const CHARACTER_FAIRY_DARK_SKIN_TONE = "\u{1F9DA}\u{1F3FF}";
    const CHARACTER_MAN_FAIRY = "\u{1F9DA}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FAIRY_LIGHT_SKIN_TONE = "\u{1F9DA}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FAIRY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DA}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FAIRY_MEDIUM_SKIN_TONE = "\u{1F9DA}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FAIRY_MEDIUM_DARK_SKIN_TONE = "\u{1F9DA}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_FAIRY_DARK_SKIN_TONE = "\u{1F9DA}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_FAIRY = "\u{1F9DA}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FAIRY_LIGHT_SKIN_TONE = "\u{1F9DA}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FAIRY_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DA}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FAIRY_MEDIUM_SKIN_TONE = "\u{1F9DA}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FAIRY_MEDIUM_DARK_SKIN_TONE = "\u{1F9DA}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_FAIRY_DARK_SKIN_TONE = "\u{1F9DA}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_VAMPIRE = "\u{1F9DB}";
    const CHARACTER_VAMPIRE_LIGHT_SKIN_TONE = "\u{1F9DB}\u{1F3FB}";
    const CHARACTER_VAMPIRE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DB}\u{1F3FC}";
    const CHARACTER_VAMPIRE_MEDIUM_SKIN_TONE = "\u{1F9DB}\u{1F3FD}";
    const CHARACTER_VAMPIRE_MEDIUM_DARK_SKIN_TONE = "\u{1F9DB}\u{1F3FE}";
    const CHARACTER_VAMPIRE_DARK_SKIN_TONE = "\u{1F9DB}\u{1F3FF}";
    const CHARACTER_MAN_VAMPIRE = "\u{1F9DB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_VAMPIRE_LIGHT_SKIN_TONE = "\u{1F9DB}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_VAMPIRE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DB}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_VAMPIRE_MEDIUM_SKIN_TONE = "\u{1F9DB}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_VAMPIRE_MEDIUM_DARK_SKIN_TONE = "\u{1F9DB}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_VAMPIRE_DARK_SKIN_TONE = "\u{1F9DB}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_VAMPIRE = "\u{1F9DB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_VAMPIRE_LIGHT_SKIN_TONE = "\u{1F9DB}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_VAMPIRE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DB}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_VAMPIRE_MEDIUM_SKIN_TONE = "\u{1F9DB}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_VAMPIRE_MEDIUM_DARK_SKIN_TONE = "\u{1F9DB}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_VAMPIRE_DARK_SKIN_TONE = "\u{1F9DB}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MERPERSON = "\u{1F9DC}";
    const CHARACTER_MERPERSON_LIGHT_SKIN_TONE = "\u{1F9DC}\u{1F3FB}";
    const CHARACTER_MERPERSON_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DC}\u{1F3FC}";
    const CHARACTER_MERPERSON_MEDIUM_SKIN_TONE = "\u{1F9DC}\u{1F3FD}";
    const CHARACTER_MERPERSON_MEDIUM_DARK_SKIN_TONE = "\u{1F9DC}\u{1F3FE}";
    const CHARACTER_MERPERSON_DARK_SKIN_TONE = "\u{1F9DC}\u{1F3FF}";
    const CHARACTER_MERMAN = "\u{1F9DC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MERMAN_LIGHT_SKIN_TONE = "\u{1F9DC}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MERMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DC}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MERMAN_MEDIUM_SKIN_TONE = "\u{1F9DC}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MERMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F9DC}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MERMAN_DARK_SKIN_TONE = "\u{1F9DC}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MERMAID = "\u{1F9DC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MERMAID_LIGHT_SKIN_TONE = "\u{1F9DC}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MERMAID_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DC}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MERMAID_MEDIUM_SKIN_TONE = "\u{1F9DC}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MERMAID_MEDIUM_DARK_SKIN_TONE = "\u{1F9DC}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_MERMAID_DARK_SKIN_TONE = "\u{1F9DC}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_ELF = "\u{1F9DD}";
    const CHARACTER_ELF_LIGHT_SKIN_TONE = "\u{1F9DD}\u{1F3FB}";
    const CHARACTER_ELF_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DD}\u{1F3FC}";
    const CHARACTER_ELF_MEDIUM_SKIN_TONE = "\u{1F9DD}\u{1F3FD}";
    const CHARACTER_ELF_MEDIUM_DARK_SKIN_TONE = "\u{1F9DD}\u{1F3FE}";
    const CHARACTER_ELF_DARK_SKIN_TONE = "\u{1F9DD}\u{1F3FF}";
    const CHARACTER_MAN_ELF = "\u{1F9DD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ELF_LIGHT_SKIN_TONE = "\u{1F9DD}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ELF_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DD}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ELF_MEDIUM_SKIN_TONE = "\u{1F9DD}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ELF_MEDIUM_DARK_SKIN_TONE = "\u{1F9DD}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ELF_DARK_SKIN_TONE = "\u{1F9DD}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_ELF = "\u{1F9DD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ELF_LIGHT_SKIN_TONE = "\u{1F9DD}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ELF_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9DD}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ELF_MEDIUM_SKIN_TONE = "\u{1F9DD}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ELF_MEDIUM_DARK_SKIN_TONE = "\u{1F9DD}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ELF_DARK_SKIN_TONE = "\u{1F9DD}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_GENIE = "\u{1F9DE}";
    const CHARACTER_MAN_GENIE = "\u{1F9DE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GENIE = "\u{1F9DE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_ZOMBIE = "\u{1F9DF}";
    const CHARACTER_MAN_ZOMBIE = "\u{1F9DF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_ZOMBIE = "\u{1F9DF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_TROLL = "\u{1F9CC}";
    // ##### Emoji subgroup: PERSON-ACTIVITY #####
    const CHARACTER_PERSON_GETTING_MASSAGE = "\u{1F486}";
    const CHARACTER_PERSON_GETTING_MASSAGE_LIGHT_SKIN_TONE = "\u{1F486}\u{1F3FB}";
    const CHARACTER_PERSON_GETTING_MASSAGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F486}\u{1F3FC}";
    const CHARACTER_PERSON_GETTING_MASSAGE_MEDIUM_SKIN_TONE = "\u{1F486}\u{1F3FD}";
    const CHARACTER_PERSON_GETTING_MASSAGE_MEDIUM_DARK_SKIN_TONE = "\u{1F486}\u{1F3FE}";
    const CHARACTER_PERSON_GETTING_MASSAGE_DARK_SKIN_TONE = "\u{1F486}\u{1F3FF}";
    const CHARACTER_MAN_GETTING_MASSAGE = "\u{1F486}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_MASSAGE_LIGHT_SKIN_TONE = "\u{1F486}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_MASSAGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F486}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_MASSAGE_MEDIUM_SKIN_TONE = "\u{1F486}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_MASSAGE_MEDIUM_DARK_SKIN_TONE = "\u{1F486}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_MASSAGE_DARK_SKIN_TONE = "\u{1F486}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_MASSAGE = "\u{1F486}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_MASSAGE_LIGHT_SKIN_TONE = "\u{1F486}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_MASSAGE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F486}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_MASSAGE_MEDIUM_SKIN_TONE = "\u{1F486}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_MASSAGE_MEDIUM_DARK_SKIN_TONE = "\u{1F486}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_MASSAGE_DARK_SKIN_TONE = "\u{1F486}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_GETTING_HAIRCUT = "\u{1F487}";
    const CHARACTER_PERSON_GETTING_HAIRCUT_LIGHT_SKIN_TONE = "\u{1F487}\u{1F3FB}";
    const CHARACTER_PERSON_GETTING_HAIRCUT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F487}\u{1F3FC}";
    const CHARACTER_PERSON_GETTING_HAIRCUT_MEDIUM_SKIN_TONE = "\u{1F487}\u{1F3FD}";
    const CHARACTER_PERSON_GETTING_HAIRCUT_MEDIUM_DARK_SKIN_TONE = "\u{1F487}\u{1F3FE}";
    const CHARACTER_PERSON_GETTING_HAIRCUT_DARK_SKIN_TONE = "\u{1F487}\u{1F3FF}";
    const CHARACTER_MAN_GETTING_HAIRCUT = "\u{1F487}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_HAIRCUT_LIGHT_SKIN_TONE = "\u{1F487}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_HAIRCUT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F487}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_HAIRCUT_MEDIUM_SKIN_TONE = "\u{1F487}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_HAIRCUT_MEDIUM_DARK_SKIN_TONE = "\u{1F487}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GETTING_HAIRCUT_DARK_SKIN_TONE = "\u{1F487}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_HAIRCUT = "\u{1F487}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_HAIRCUT_LIGHT_SKIN_TONE = "\u{1F487}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_HAIRCUT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F487}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_HAIRCUT_MEDIUM_SKIN_TONE = "\u{1F487}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_HAIRCUT_MEDIUM_DARK_SKIN_TONE = "\u{1F487}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GETTING_HAIRCUT_DARK_SKIN_TONE = "\u{1F487}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_WALKING = "\u{1F6B6}";
    const CHARACTER_PERSON_WALKING_LIGHT_SKIN_TONE = "\u{1F6B6}\u{1F3FB}";
    const CHARACTER_PERSON_WALKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B6}\u{1F3FC}";
    const CHARACTER_PERSON_WALKING_MEDIUM_SKIN_TONE = "\u{1F6B6}\u{1F3FD}";
    const CHARACTER_PERSON_WALKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B6}\u{1F3FE}";
    const CHARACTER_PERSON_WALKING_DARK_SKIN_TONE = "\u{1F6B6}\u{1F3FF}";
    const CHARACTER_MAN_WALKING = "\u{1F6B6}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WALKING_LIGHT_SKIN_TONE = "\u{1F6B6}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WALKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B6}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WALKING_MEDIUM_SKIN_TONE = "\u{1F6B6}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WALKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B6}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_WALKING_DARK_SKIN_TONE = "\u{1F6B6}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_WALKING = "\u{1F6B6}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WALKING_LIGHT_SKIN_TONE = "\u{1F6B6}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WALKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B6}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WALKING_MEDIUM_SKIN_TONE = "\u{1F6B6}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WALKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B6}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_WALKING_DARK_SKIN_TONE = "\u{1F6B6}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_STANDING = "\u{1F9CD}";
    const CHARACTER_PERSON_STANDING_LIGHT_SKIN_TONE = "\u{1F9CD}\u{1F3FB}";
    const CHARACTER_PERSON_STANDING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CD}\u{1F3FC}";
    const CHARACTER_PERSON_STANDING_MEDIUM_SKIN_TONE = "\u{1F9CD}\u{1F3FD}";
    const CHARACTER_PERSON_STANDING_MEDIUM_DARK_SKIN_TONE = "\u{1F9CD}\u{1F3FE}";
    const CHARACTER_PERSON_STANDING_DARK_SKIN_TONE = "\u{1F9CD}\u{1F3FF}";
    const CHARACTER_MAN_STANDING = "\u{1F9CD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_STANDING_LIGHT_SKIN_TONE = "\u{1F9CD}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_STANDING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CD}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_STANDING_MEDIUM_SKIN_TONE = "\u{1F9CD}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_STANDING_MEDIUM_DARK_SKIN_TONE = "\u{1F9CD}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_STANDING_DARK_SKIN_TONE = "\u{1F9CD}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_STANDING = "\u{1F9CD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_STANDING_LIGHT_SKIN_TONE = "\u{1F9CD}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_STANDING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CD}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_STANDING_MEDIUM_SKIN_TONE = "\u{1F9CD}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_STANDING_MEDIUM_DARK_SKIN_TONE = "\u{1F9CD}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_STANDING_DARK_SKIN_TONE = "\u{1F9CD}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_KNEELING = "\u{1F9CE}";
    const CHARACTER_PERSON_KNEELING_LIGHT_SKIN_TONE = "\u{1F9CE}\u{1F3FB}";
    const CHARACTER_PERSON_KNEELING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CE}\u{1F3FC}";
    const CHARACTER_PERSON_KNEELING_MEDIUM_SKIN_TONE = "\u{1F9CE}\u{1F3FD}";
    const CHARACTER_PERSON_KNEELING_MEDIUM_DARK_SKIN_TONE = "\u{1F9CE}\u{1F3FE}";
    const CHARACTER_PERSON_KNEELING_DARK_SKIN_TONE = "\u{1F9CE}\u{1F3FF}";
    const CHARACTER_MAN_KNEELING = "\u{1F9CE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_KNEELING_LIGHT_SKIN_TONE = "\u{1F9CE}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_KNEELING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CE}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_KNEELING_MEDIUM_SKIN_TONE = "\u{1F9CE}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_KNEELING_MEDIUM_DARK_SKIN_TONE = "\u{1F9CE}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_KNEELING_DARK_SKIN_TONE = "\u{1F9CE}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_KNEELING = "\u{1F9CE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_KNEELING_LIGHT_SKIN_TONE = "\u{1F9CE}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_KNEELING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9CE}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_KNEELING_MEDIUM_SKIN_TONE = "\u{1F9CE}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_KNEELING_MEDIUM_DARK_SKIN_TONE = "\u{1F9CE}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_KNEELING_DARK_SKIN_TONE = "\u{1F9CE}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_WITH_WHITE_CANE = "\u{1F9D1}\u{200D}\u{1F9AF}";
    const CHARACTER_PERSON_WITH_WHITE_CANE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9AF}";
    const CHARACTER_PERSON_WITH_WHITE_CANE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9AF}";
    const CHARACTER_PERSON_WITH_WHITE_CANE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9AF}";
    const CHARACTER_PERSON_WITH_WHITE_CANE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9AF}";
    const CHARACTER_PERSON_WITH_WHITE_CANE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9AF}";
    const CHARACTER_MAN_WITH_WHITE_CANE = "\u{1F468}\u{200D}\u{1F9AF}";
    const CHARACTER_MAN_WITH_WHITE_CANE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9AF}";
    const CHARACTER_MAN_WITH_WHITE_CANE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9AF}";
    const CHARACTER_MAN_WITH_WHITE_CANE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9AF}";
    const CHARACTER_MAN_WITH_WHITE_CANE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9AF}";
    const CHARACTER_MAN_WITH_WHITE_CANE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9AF}";
    const CHARACTER_WOMAN_WITH_WHITE_CANE = "\u{1F469}\u{200D}\u{1F9AF}";
    const CHARACTER_WOMAN_WITH_WHITE_CANE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9AF}";
    const CHARACTER_WOMAN_WITH_WHITE_CANE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9AF}";
    const CHARACTER_WOMAN_WITH_WHITE_CANE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9AF}";
    const CHARACTER_WOMAN_WITH_WHITE_CANE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9AF}";
    const CHARACTER_WOMAN_WITH_WHITE_CANE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9AF}";
    const CHARACTER_PERSON_IN_MOTORIZED_WHEELCHAIR = "\u{1F9D1}\u{200D}\u{1F9BC}";
    const CHARACTER_PERSON_IN_MOTORIZED_WHEELCHAIR_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9BC}";
    const CHARACTER_PERSON_IN_MOTORIZED_WHEELCHAIR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9BC}";
    const CHARACTER_PERSON_IN_MOTORIZED_WHEELCHAIR_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9BC}";
    const CHARACTER_PERSON_IN_MOTORIZED_WHEELCHAIR_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9BC}";
    const CHARACTER_PERSON_IN_MOTORIZED_WHEELCHAIR_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9BC}";
    const CHARACTER_MAN_IN_MOTORIZED_WHEELCHAIR = "\u{1F468}\u{200D}\u{1F9BC}";
    const CHARACTER_MAN_IN_MOTORIZED_WHEELCHAIR_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9BC}";
    const CHARACTER_MAN_IN_MOTORIZED_WHEELCHAIR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9BC}";
    const CHARACTER_MAN_IN_MOTORIZED_WHEELCHAIR_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9BC}";
    const CHARACTER_MAN_IN_MOTORIZED_WHEELCHAIR_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9BC}";
    const CHARACTER_MAN_IN_MOTORIZED_WHEELCHAIR_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9BC}";
    const CHARACTER_WOMAN_IN_MOTORIZED_WHEELCHAIR = "\u{1F469}\u{200D}\u{1F9BC}";
    const CHARACTER_WOMAN_IN_MOTORIZED_WHEELCHAIR_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9BC}";
    const CHARACTER_WOMAN_IN_MOTORIZED_WHEELCHAIR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9BC}";
    const CHARACTER_WOMAN_IN_MOTORIZED_WHEELCHAIR_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9BC}";
    const CHARACTER_WOMAN_IN_MOTORIZED_WHEELCHAIR_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9BC}";
    const CHARACTER_WOMAN_IN_MOTORIZED_WHEELCHAIR_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9BC}";
    const CHARACTER_PERSON_IN_MANUAL_WHEELCHAIR = "\u{1F9D1}\u{200D}\u{1F9BD}";
    const CHARACTER_PERSON_IN_MANUAL_WHEELCHAIR_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F9BD}";
    const CHARACTER_PERSON_IN_MANUAL_WHEELCHAIR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F9BD}";
    const CHARACTER_PERSON_IN_MANUAL_WHEELCHAIR_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F9BD}";
    const CHARACTER_PERSON_IN_MANUAL_WHEELCHAIR_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F9BD}";
    const CHARACTER_PERSON_IN_MANUAL_WHEELCHAIR_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F9BD}";
    const CHARACTER_MAN_IN_MANUAL_WHEELCHAIR = "\u{1F468}\u{200D}\u{1F9BD}";
    const CHARACTER_MAN_IN_MANUAL_WHEELCHAIR_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F9BD}";
    const CHARACTER_MAN_IN_MANUAL_WHEELCHAIR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F9BD}";
    const CHARACTER_MAN_IN_MANUAL_WHEELCHAIR_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F9BD}";
    const CHARACTER_MAN_IN_MANUAL_WHEELCHAIR_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F9BD}";
    const CHARACTER_MAN_IN_MANUAL_WHEELCHAIR_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F9BD}";
    const CHARACTER_WOMAN_IN_MANUAL_WHEELCHAIR = "\u{1F469}\u{200D}\u{1F9BD}";
    const CHARACTER_WOMAN_IN_MANUAL_WHEELCHAIR_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F9BD}";
    const CHARACTER_WOMAN_IN_MANUAL_WHEELCHAIR_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F9BD}";
    const CHARACTER_WOMAN_IN_MANUAL_WHEELCHAIR_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F9BD}";
    const CHARACTER_WOMAN_IN_MANUAL_WHEELCHAIR_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F9BD}";
    const CHARACTER_WOMAN_IN_MANUAL_WHEELCHAIR_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F9BD}";
    const CHARACTER_PERSON_RUNNING = "\u{1F3C3}";
    const CHARACTER_PERSON_RUNNING_LIGHT_SKIN_TONE = "\u{1F3C3}\u{1F3FB}";
    const CHARACTER_PERSON_RUNNING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C3}\u{1F3FC}";
    const CHARACTER_PERSON_RUNNING_MEDIUM_SKIN_TONE = "\u{1F3C3}\u{1F3FD}";
    const CHARACTER_PERSON_RUNNING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C3}\u{1F3FE}";
    const CHARACTER_PERSON_RUNNING_DARK_SKIN_TONE = "\u{1F3C3}\u{1F3FF}";
    const CHARACTER_MAN_RUNNING = "\u{1F3C3}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RUNNING_LIGHT_SKIN_TONE = "\u{1F3C3}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RUNNING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C3}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RUNNING_MEDIUM_SKIN_TONE = "\u{1F3C3}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RUNNING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C3}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_RUNNING_DARK_SKIN_TONE = "\u{1F3C3}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_RUNNING = "\u{1F3C3}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RUNNING_LIGHT_SKIN_TONE = "\u{1F3C3}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RUNNING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C3}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RUNNING_MEDIUM_SKIN_TONE = "\u{1F3C3}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RUNNING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C3}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_RUNNING_DARK_SKIN_TONE = "\u{1F3C3}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_DANCING = "\u{1F483}";
    const CHARACTER_WOMAN_DANCING_LIGHT_SKIN_TONE = "\u{1F483}\u{1F3FB}";
    const CHARACTER_WOMAN_DANCING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F483}\u{1F3FC}";
    const CHARACTER_WOMAN_DANCING_MEDIUM_SKIN_TONE = "\u{1F483}\u{1F3FD}";
    const CHARACTER_WOMAN_DANCING_MEDIUM_DARK_SKIN_TONE = "\u{1F483}\u{1F3FE}";
    const CHARACTER_WOMAN_DANCING_DARK_SKIN_TONE = "\u{1F483}\u{1F3FF}";
    const CHARACTER_MAN_DANCING = "\u{1F57A}";
    const CHARACTER_MAN_DANCING_LIGHT_SKIN_TONE = "\u{1F57A}\u{1F3FB}";
    const CHARACTER_MAN_DANCING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F57A}\u{1F3FC}";
    const CHARACTER_MAN_DANCING_MEDIUM_SKIN_TONE = "\u{1F57A}\u{1F3FD}";
    const CHARACTER_MAN_DANCING_MEDIUM_DARK_SKIN_TONE = "\u{1F57A}\u{1F3FE}";
    const CHARACTER_MAN_DANCING_DARK_SKIN_TONE = "\u{1F57A}\u{1F3FF}";
    const CHARACTER_PERSON_IN_SUIT_LEVITATING = "\u{1F574}\u{FE0F}";
    const CHARACTER_PERSON_IN_SUIT_LEVITATING_LIGHT_SKIN_TONE = "\u{1F574}\u{1F3FB}";
    const CHARACTER_PERSON_IN_SUIT_LEVITATING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F574}\u{1F3FC}";
    const CHARACTER_PERSON_IN_SUIT_LEVITATING_MEDIUM_SKIN_TONE = "\u{1F574}\u{1F3FD}";
    const CHARACTER_PERSON_IN_SUIT_LEVITATING_MEDIUM_DARK_SKIN_TONE = "\u{1F574}\u{1F3FE}";
    const CHARACTER_PERSON_IN_SUIT_LEVITATING_DARK_SKIN_TONE = "\u{1F574}\u{1F3FF}";
    const CHARACTER_PEOPLE_WITH_BUNNY_EARS = "\u{1F46F}";
    const CHARACTER_MEN_WITH_BUNNY_EARS = "\u{1F46F}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMEN_WITH_BUNNY_EARS = "\u{1F46F}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_IN_STEAMY_ROOM = "\u{1F9D6}";
    const CHARACTER_PERSON_IN_STEAMY_ROOM_LIGHT_SKIN_TONE = "\u{1F9D6}\u{1F3FB}";
    const CHARACTER_PERSON_IN_STEAMY_ROOM_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D6}\u{1F3FC}";
    const CHARACTER_PERSON_IN_STEAMY_ROOM_MEDIUM_SKIN_TONE = "\u{1F9D6}\u{1F3FD}";
    const CHARACTER_PERSON_IN_STEAMY_ROOM_MEDIUM_DARK_SKIN_TONE = "\u{1F9D6}\u{1F3FE}";
    const CHARACTER_PERSON_IN_STEAMY_ROOM_DARK_SKIN_TONE = "\u{1F9D6}\u{1F3FF}";
    const CHARACTER_MAN_IN_STEAMY_ROOM = "\u{1F9D6}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_STEAMY_ROOM_LIGHT_SKIN_TONE = "\u{1F9D6}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_STEAMY_ROOM_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D6}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_STEAMY_ROOM_MEDIUM_SKIN_TONE = "\u{1F9D6}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_STEAMY_ROOM_MEDIUM_DARK_SKIN_TONE = "\u{1F9D6}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_STEAMY_ROOM_DARK_SKIN_TONE = "\u{1F9D6}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_IN_STEAMY_ROOM = "\u{1F9D6}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_STEAMY_ROOM_LIGHT_SKIN_TONE = "\u{1F9D6}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_STEAMY_ROOM_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D6}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_STEAMY_ROOM_MEDIUM_SKIN_TONE = "\u{1F9D6}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_STEAMY_ROOM_MEDIUM_DARK_SKIN_TONE = "\u{1F9D6}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_STEAMY_ROOM_DARK_SKIN_TONE = "\u{1F9D6}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_CLIMBING = "\u{1F9D7}";
    const CHARACTER_PERSON_CLIMBING_LIGHT_SKIN_TONE = "\u{1F9D7}\u{1F3FB}";
    const CHARACTER_PERSON_CLIMBING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D7}\u{1F3FC}";
    const CHARACTER_PERSON_CLIMBING_MEDIUM_SKIN_TONE = "\u{1F9D7}\u{1F3FD}";
    const CHARACTER_PERSON_CLIMBING_MEDIUM_DARK_SKIN_TONE = "\u{1F9D7}\u{1F3FE}";
    const CHARACTER_PERSON_CLIMBING_DARK_SKIN_TONE = "\u{1F9D7}\u{1F3FF}";
    const CHARACTER_MAN_CLIMBING = "\u{1F9D7}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CLIMBING_LIGHT_SKIN_TONE = "\u{1F9D7}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CLIMBING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D7}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CLIMBING_MEDIUM_SKIN_TONE = "\u{1F9D7}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CLIMBING_MEDIUM_DARK_SKIN_TONE = "\u{1F9D7}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CLIMBING_DARK_SKIN_TONE = "\u{1F9D7}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_CLIMBING = "\u{1F9D7}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CLIMBING_LIGHT_SKIN_TONE = "\u{1F9D7}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CLIMBING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D7}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CLIMBING_MEDIUM_SKIN_TONE = "\u{1F9D7}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CLIMBING_MEDIUM_DARK_SKIN_TONE = "\u{1F9D7}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CLIMBING_DARK_SKIN_TONE = "\u{1F9D7}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    // ##### Emoji subgroup: PERSON-SPORT #####
    const CHARACTER_PERSON_FENCING = "\u{1F93A}";
    const CHARACTER_HORSE_RACING = "\u{1F3C7}";
    const CHARACTER_HORSE_RACING_LIGHT_SKIN_TONE = "\u{1F3C7}\u{1F3FB}";
    const CHARACTER_HORSE_RACING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C7}\u{1F3FC}";
    const CHARACTER_HORSE_RACING_MEDIUM_SKIN_TONE = "\u{1F3C7}\u{1F3FD}";
    const CHARACTER_HORSE_RACING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C7}\u{1F3FE}";
    const CHARACTER_HORSE_RACING_DARK_SKIN_TONE = "\u{1F3C7}\u{1F3FF}";
    const CHARACTER_SKIER = "\u{26F7}\u{FE0F}";
    const CHARACTER_SNOWBOARDER = "\u{1F3C2}";
    const CHARACTER_SNOWBOARDER_LIGHT_SKIN_TONE = "\u{1F3C2}\u{1F3FB}";
    const CHARACTER_SNOWBOARDER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C2}\u{1F3FC}";
    const CHARACTER_SNOWBOARDER_MEDIUM_SKIN_TONE = "\u{1F3C2}\u{1F3FD}";
    const CHARACTER_SNOWBOARDER_MEDIUM_DARK_SKIN_TONE = "\u{1F3C2}\u{1F3FE}";
    const CHARACTER_SNOWBOARDER_DARK_SKIN_TONE = "\u{1F3C2}\u{1F3FF}";
    const CHARACTER_PERSON_GOLFING = "\u{1F3CC}\u{FE0F}";
    const CHARACTER_PERSON_GOLFING_LIGHT_SKIN_TONE = "\u{1F3CC}\u{1F3FB}";
    const CHARACTER_PERSON_GOLFING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CC}\u{1F3FC}";
    const CHARACTER_PERSON_GOLFING_MEDIUM_SKIN_TONE = "\u{1F3CC}\u{1F3FD}";
    const CHARACTER_PERSON_GOLFING_MEDIUM_DARK_SKIN_TONE = "\u{1F3CC}\u{1F3FE}";
    const CHARACTER_PERSON_GOLFING_DARK_SKIN_TONE = "\u{1F3CC}\u{1F3FF}";
    const CHARACTER_MAN_GOLFING = "\u{1F3CC}\u{FE0F}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GOLFING_LIGHT_SKIN_TONE = "\u{1F3CC}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GOLFING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CC}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GOLFING_MEDIUM_SKIN_TONE = "\u{1F3CC}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GOLFING_MEDIUM_DARK_SKIN_TONE = "\u{1F3CC}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_GOLFING_DARK_SKIN_TONE = "\u{1F3CC}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_GOLFING = "\u{1F3CC}\u{FE0F}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GOLFING_LIGHT_SKIN_TONE = "\u{1F3CC}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GOLFING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CC}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GOLFING_MEDIUM_SKIN_TONE = "\u{1F3CC}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GOLFING_MEDIUM_DARK_SKIN_TONE = "\u{1F3CC}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_GOLFING_DARK_SKIN_TONE = "\u{1F3CC}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_SURFING = "\u{1F3C4}";
    const CHARACTER_PERSON_SURFING_LIGHT_SKIN_TONE = "\u{1F3C4}\u{1F3FB}";
    const CHARACTER_PERSON_SURFING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C4}\u{1F3FC}";
    const CHARACTER_PERSON_SURFING_MEDIUM_SKIN_TONE = "\u{1F3C4}\u{1F3FD}";
    const CHARACTER_PERSON_SURFING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C4}\u{1F3FE}";
    const CHARACTER_PERSON_SURFING_DARK_SKIN_TONE = "\u{1F3C4}\u{1F3FF}";
    const CHARACTER_MAN_SURFING = "\u{1F3C4}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SURFING_LIGHT_SKIN_TONE = "\u{1F3C4}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SURFING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C4}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SURFING_MEDIUM_SKIN_TONE = "\u{1F3C4}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SURFING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C4}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SURFING_DARK_SKIN_TONE = "\u{1F3C4}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_SURFING = "\u{1F3C4}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SURFING_LIGHT_SKIN_TONE = "\u{1F3C4}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SURFING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3C4}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SURFING_MEDIUM_SKIN_TONE = "\u{1F3C4}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SURFING_MEDIUM_DARK_SKIN_TONE = "\u{1F3C4}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SURFING_DARK_SKIN_TONE = "\u{1F3C4}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_ROWING_BOAT = "\u{1F6A3}";
    const CHARACTER_PERSON_ROWING_BOAT_LIGHT_SKIN_TONE = "\u{1F6A3}\u{1F3FB}";
    const CHARACTER_PERSON_ROWING_BOAT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6A3}\u{1F3FC}";
    const CHARACTER_PERSON_ROWING_BOAT_MEDIUM_SKIN_TONE = "\u{1F6A3}\u{1F3FD}";
    const CHARACTER_PERSON_ROWING_BOAT_MEDIUM_DARK_SKIN_TONE = "\u{1F6A3}\u{1F3FE}";
    const CHARACTER_PERSON_ROWING_BOAT_DARK_SKIN_TONE = "\u{1F6A3}\u{1F3FF}";
    const CHARACTER_MAN_ROWING_BOAT = "\u{1F6A3}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ROWING_BOAT_LIGHT_SKIN_TONE = "\u{1F6A3}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ROWING_BOAT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6A3}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ROWING_BOAT_MEDIUM_SKIN_TONE = "\u{1F6A3}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ROWING_BOAT_MEDIUM_DARK_SKIN_TONE = "\u{1F6A3}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_ROWING_BOAT_DARK_SKIN_TONE = "\u{1F6A3}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_ROWING_BOAT = "\u{1F6A3}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ROWING_BOAT_LIGHT_SKIN_TONE = "\u{1F6A3}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ROWING_BOAT_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6A3}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ROWING_BOAT_MEDIUM_SKIN_TONE = "\u{1F6A3}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ROWING_BOAT_MEDIUM_DARK_SKIN_TONE = "\u{1F6A3}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_ROWING_BOAT_DARK_SKIN_TONE = "\u{1F6A3}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_SWIMMING = "\u{1F3CA}";
    const CHARACTER_PERSON_SWIMMING_LIGHT_SKIN_TONE = "\u{1F3CA}\u{1F3FB}";
    const CHARACTER_PERSON_SWIMMING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CA}\u{1F3FC}";
    const CHARACTER_PERSON_SWIMMING_MEDIUM_SKIN_TONE = "\u{1F3CA}\u{1F3FD}";
    const CHARACTER_PERSON_SWIMMING_MEDIUM_DARK_SKIN_TONE = "\u{1F3CA}\u{1F3FE}";
    const CHARACTER_PERSON_SWIMMING_DARK_SKIN_TONE = "\u{1F3CA}\u{1F3FF}";
    const CHARACTER_MAN_SWIMMING = "\u{1F3CA}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SWIMMING_LIGHT_SKIN_TONE = "\u{1F3CA}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SWIMMING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CA}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SWIMMING_MEDIUM_SKIN_TONE = "\u{1F3CA}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SWIMMING_MEDIUM_DARK_SKIN_TONE = "\u{1F3CA}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_SWIMMING_DARK_SKIN_TONE = "\u{1F3CA}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_SWIMMING = "\u{1F3CA}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SWIMMING_LIGHT_SKIN_TONE = "\u{1F3CA}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SWIMMING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CA}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SWIMMING_MEDIUM_SKIN_TONE = "\u{1F3CA}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SWIMMING_MEDIUM_DARK_SKIN_TONE = "\u{1F3CA}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_SWIMMING_DARK_SKIN_TONE = "\u{1F3CA}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_BOUNCING_BALL = "\u{26F9}\u{FE0F}";
    const CHARACTER_PERSON_BOUNCING_BALL_LIGHT_SKIN_TONE = "\u{26F9}\u{1F3FB}";
    const CHARACTER_PERSON_BOUNCING_BALL_MEDIUM_LIGHT_SKIN_TONE = "\u{26F9}\u{1F3FC}";
    const CHARACTER_PERSON_BOUNCING_BALL_MEDIUM_SKIN_TONE = "\u{26F9}\u{1F3FD}";
    const CHARACTER_PERSON_BOUNCING_BALL_MEDIUM_DARK_SKIN_TONE = "\u{26F9}\u{1F3FE}";
    const CHARACTER_PERSON_BOUNCING_BALL_DARK_SKIN_TONE = "\u{26F9}\u{1F3FF}";
    const CHARACTER_MAN_BOUNCING_BALL = "\u{26F9}\u{FE0F}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOUNCING_BALL_LIGHT_SKIN_TONE = "\u{26F9}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOUNCING_BALL_MEDIUM_LIGHT_SKIN_TONE = "\u{26F9}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOUNCING_BALL_MEDIUM_SKIN_TONE = "\u{26F9}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOUNCING_BALL_MEDIUM_DARK_SKIN_TONE = "\u{26F9}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BOUNCING_BALL_DARK_SKIN_TONE = "\u{26F9}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_BOUNCING_BALL = "\u{26F9}\u{FE0F}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOUNCING_BALL_LIGHT_SKIN_TONE = "\u{26F9}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOUNCING_BALL_MEDIUM_LIGHT_SKIN_TONE = "\u{26F9}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOUNCING_BALL_MEDIUM_SKIN_TONE = "\u{26F9}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOUNCING_BALL_MEDIUM_DARK_SKIN_TONE = "\u{26F9}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BOUNCING_BALL_DARK_SKIN_TONE = "\u{26F9}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_LIFTING_WEIGHTS = "\u{1F3CB}\u{FE0F}";
    const CHARACTER_PERSON_LIFTING_WEIGHTS_LIGHT_SKIN_TONE = "\u{1F3CB}\u{1F3FB}";
    const CHARACTER_PERSON_LIFTING_WEIGHTS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CB}\u{1F3FC}";
    const CHARACTER_PERSON_LIFTING_WEIGHTS_MEDIUM_SKIN_TONE = "\u{1F3CB}\u{1F3FD}";
    const CHARACTER_PERSON_LIFTING_WEIGHTS_MEDIUM_DARK_SKIN_TONE = "\u{1F3CB}\u{1F3FE}";
    const CHARACTER_PERSON_LIFTING_WEIGHTS_DARK_SKIN_TONE = "\u{1F3CB}\u{1F3FF}";
    const CHARACTER_MAN_LIFTING_WEIGHTS = "\u{1F3CB}\u{FE0F}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIFTING_WEIGHTS_LIGHT_SKIN_TONE = "\u{1F3CB}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIFTING_WEIGHTS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CB}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIFTING_WEIGHTS_MEDIUM_SKIN_TONE = "\u{1F3CB}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIFTING_WEIGHTS_MEDIUM_DARK_SKIN_TONE = "\u{1F3CB}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_LIFTING_WEIGHTS_DARK_SKIN_TONE = "\u{1F3CB}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_LIFTING_WEIGHTS = "\u{1F3CB}\u{FE0F}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIFTING_WEIGHTS_LIGHT_SKIN_TONE = "\u{1F3CB}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIFTING_WEIGHTS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3CB}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIFTING_WEIGHTS_MEDIUM_SKIN_TONE = "\u{1F3CB}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIFTING_WEIGHTS_MEDIUM_DARK_SKIN_TONE = "\u{1F3CB}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_LIFTING_WEIGHTS_DARK_SKIN_TONE = "\u{1F3CB}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_BIKING = "\u{1F6B4}";
    const CHARACTER_PERSON_BIKING_LIGHT_SKIN_TONE = "\u{1F6B4}\u{1F3FB}";
    const CHARACTER_PERSON_BIKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B4}\u{1F3FC}";
    const CHARACTER_PERSON_BIKING_MEDIUM_SKIN_TONE = "\u{1F6B4}\u{1F3FD}";
    const CHARACTER_PERSON_BIKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B4}\u{1F3FE}";
    const CHARACTER_PERSON_BIKING_DARK_SKIN_TONE = "\u{1F6B4}\u{1F3FF}";
    const CHARACTER_MAN_BIKING = "\u{1F6B4}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BIKING_LIGHT_SKIN_TONE = "\u{1F6B4}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BIKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B4}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BIKING_MEDIUM_SKIN_TONE = "\u{1F6B4}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BIKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B4}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_BIKING_DARK_SKIN_TONE = "\u{1F6B4}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_BIKING = "\u{1F6B4}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BIKING_LIGHT_SKIN_TONE = "\u{1F6B4}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BIKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B4}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BIKING_MEDIUM_SKIN_TONE = "\u{1F6B4}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BIKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B4}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_BIKING_DARK_SKIN_TONE = "\u{1F6B4}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_MOUNTAIN_BIKING = "\u{1F6B5}";
    const CHARACTER_PERSON_MOUNTAIN_BIKING_LIGHT_SKIN_TONE = "\u{1F6B5}\u{1F3FB}";
    const CHARACTER_PERSON_MOUNTAIN_BIKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B5}\u{1F3FC}";
    const CHARACTER_PERSON_MOUNTAIN_BIKING_MEDIUM_SKIN_TONE = "\u{1F6B5}\u{1F3FD}";
    const CHARACTER_PERSON_MOUNTAIN_BIKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B5}\u{1F3FE}";
    const CHARACTER_PERSON_MOUNTAIN_BIKING_DARK_SKIN_TONE = "\u{1F6B5}\u{1F3FF}";
    const CHARACTER_MAN_MOUNTAIN_BIKING = "\u{1F6B5}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MOUNTAIN_BIKING_LIGHT_SKIN_TONE = "\u{1F6B5}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MOUNTAIN_BIKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B5}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MOUNTAIN_BIKING_MEDIUM_SKIN_TONE = "\u{1F6B5}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MOUNTAIN_BIKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B5}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_MOUNTAIN_BIKING_DARK_SKIN_TONE = "\u{1F6B5}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_MOUNTAIN_BIKING = "\u{1F6B5}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MOUNTAIN_BIKING_LIGHT_SKIN_TONE = "\u{1F6B5}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MOUNTAIN_BIKING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6B5}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MOUNTAIN_BIKING_MEDIUM_SKIN_TONE = "\u{1F6B5}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MOUNTAIN_BIKING_MEDIUM_DARK_SKIN_TONE = "\u{1F6B5}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_MOUNTAIN_BIKING_DARK_SKIN_TONE = "\u{1F6B5}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_CARTWHEELING = "\u{1F938}";
    const CHARACTER_PERSON_CARTWHEELING_LIGHT_SKIN_TONE = "\u{1F938}\u{1F3FB}";
    const CHARACTER_PERSON_CARTWHEELING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F938}\u{1F3FC}";
    const CHARACTER_PERSON_CARTWHEELING_MEDIUM_SKIN_TONE = "\u{1F938}\u{1F3FD}";
    const CHARACTER_PERSON_CARTWHEELING_MEDIUM_DARK_SKIN_TONE = "\u{1F938}\u{1F3FE}";
    const CHARACTER_PERSON_CARTWHEELING_DARK_SKIN_TONE = "\u{1F938}\u{1F3FF}";
    const CHARACTER_MAN_CARTWHEELING = "\u{1F938}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CARTWHEELING_LIGHT_SKIN_TONE = "\u{1F938}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CARTWHEELING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F938}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CARTWHEELING_MEDIUM_SKIN_TONE = "\u{1F938}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CARTWHEELING_MEDIUM_DARK_SKIN_TONE = "\u{1F938}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_CARTWHEELING_DARK_SKIN_TONE = "\u{1F938}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_CARTWHEELING = "\u{1F938}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CARTWHEELING_LIGHT_SKIN_TONE = "\u{1F938}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CARTWHEELING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F938}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CARTWHEELING_MEDIUM_SKIN_TONE = "\u{1F938}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CARTWHEELING_MEDIUM_DARK_SKIN_TONE = "\u{1F938}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_CARTWHEELING_DARK_SKIN_TONE = "\u{1F938}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PEOPLE_WRESTLING = "\u{1F93C}";
    const CHARACTER_MEN_WRESTLING = "\u{1F93C}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMEN_WRESTLING = "\u{1F93C}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_PLAYING_WATER_POLO = "\u{1F93D}";
    const CHARACTER_PERSON_PLAYING_WATER_POLO_LIGHT_SKIN_TONE = "\u{1F93D}\u{1F3FB}";
    const CHARACTER_PERSON_PLAYING_WATER_POLO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F93D}\u{1F3FC}";
    const CHARACTER_PERSON_PLAYING_WATER_POLO_MEDIUM_SKIN_TONE = "\u{1F93D}\u{1F3FD}";
    const CHARACTER_PERSON_PLAYING_WATER_POLO_MEDIUM_DARK_SKIN_TONE = "\u{1F93D}\u{1F3FE}";
    const CHARACTER_PERSON_PLAYING_WATER_POLO_DARK_SKIN_TONE = "\u{1F93D}\u{1F3FF}";
    const CHARACTER_MAN_PLAYING_WATER_POLO = "\u{1F93D}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_WATER_POLO_LIGHT_SKIN_TONE = "\u{1F93D}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_WATER_POLO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F93D}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_WATER_POLO_MEDIUM_SKIN_TONE = "\u{1F93D}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_WATER_POLO_MEDIUM_DARK_SKIN_TONE = "\u{1F93D}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_WATER_POLO_DARK_SKIN_TONE = "\u{1F93D}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_WATER_POLO = "\u{1F93D}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_WATER_POLO_LIGHT_SKIN_TONE = "\u{1F93D}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_WATER_POLO_MEDIUM_LIGHT_SKIN_TONE = "\u{1F93D}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_WATER_POLO_MEDIUM_SKIN_TONE = "\u{1F93D}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_WATER_POLO_MEDIUM_DARK_SKIN_TONE = "\u{1F93D}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_WATER_POLO_DARK_SKIN_TONE = "\u{1F93D}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_PLAYING_HANDBALL = "\u{1F93E}";
    const CHARACTER_PERSON_PLAYING_HANDBALL_LIGHT_SKIN_TONE = "\u{1F93E}\u{1F3FB}";
    const CHARACTER_PERSON_PLAYING_HANDBALL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F93E}\u{1F3FC}";
    const CHARACTER_PERSON_PLAYING_HANDBALL_MEDIUM_SKIN_TONE = "\u{1F93E}\u{1F3FD}";
    const CHARACTER_PERSON_PLAYING_HANDBALL_MEDIUM_DARK_SKIN_TONE = "\u{1F93E}\u{1F3FE}";
    const CHARACTER_PERSON_PLAYING_HANDBALL_DARK_SKIN_TONE = "\u{1F93E}\u{1F3FF}";
    const CHARACTER_MAN_PLAYING_HANDBALL = "\u{1F93E}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_HANDBALL_LIGHT_SKIN_TONE = "\u{1F93E}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_HANDBALL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F93E}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_HANDBALL_MEDIUM_SKIN_TONE = "\u{1F93E}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_HANDBALL_MEDIUM_DARK_SKIN_TONE = "\u{1F93E}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_PLAYING_HANDBALL_DARK_SKIN_TONE = "\u{1F93E}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_HANDBALL = "\u{1F93E}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_HANDBALL_LIGHT_SKIN_TONE = "\u{1F93E}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_HANDBALL_MEDIUM_LIGHT_SKIN_TONE = "\u{1F93E}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_HANDBALL_MEDIUM_SKIN_TONE = "\u{1F93E}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_HANDBALL_MEDIUM_DARK_SKIN_TONE = "\u{1F93E}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_PLAYING_HANDBALL_DARK_SKIN_TONE = "\u{1F93E}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_JUGGLING = "\u{1F939}";
    const CHARACTER_PERSON_JUGGLING_LIGHT_SKIN_TONE = "\u{1F939}\u{1F3FB}";
    const CHARACTER_PERSON_JUGGLING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F939}\u{1F3FC}";
    const CHARACTER_PERSON_JUGGLING_MEDIUM_SKIN_TONE = "\u{1F939}\u{1F3FD}";
    const CHARACTER_PERSON_JUGGLING_MEDIUM_DARK_SKIN_TONE = "\u{1F939}\u{1F3FE}";
    const CHARACTER_PERSON_JUGGLING_DARK_SKIN_TONE = "\u{1F939}\u{1F3FF}";
    const CHARACTER_MAN_JUGGLING = "\u{1F939}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_JUGGLING_LIGHT_SKIN_TONE = "\u{1F939}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_JUGGLING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F939}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_JUGGLING_MEDIUM_SKIN_TONE = "\u{1F939}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_JUGGLING_MEDIUM_DARK_SKIN_TONE = "\u{1F939}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_JUGGLING_DARK_SKIN_TONE = "\u{1F939}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_JUGGLING = "\u{1F939}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_JUGGLING_LIGHT_SKIN_TONE = "\u{1F939}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_JUGGLING_MEDIUM_LIGHT_SKIN_TONE = "\u{1F939}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_JUGGLING_MEDIUM_SKIN_TONE = "\u{1F939}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_JUGGLING_MEDIUM_DARK_SKIN_TONE = "\u{1F939}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_JUGGLING_DARK_SKIN_TONE = "\u{1F939}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    // ##### Emoji subgroup: PERSON-RESTING #####
    const CHARACTER_PERSON_IN_LOTUS_POSITION = "\u{1F9D8}";
    const CHARACTER_PERSON_IN_LOTUS_POSITION_LIGHT_SKIN_TONE = "\u{1F9D8}\u{1F3FB}";
    const CHARACTER_PERSON_IN_LOTUS_POSITION_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D8}\u{1F3FC}";
    const CHARACTER_PERSON_IN_LOTUS_POSITION_MEDIUM_SKIN_TONE = "\u{1F9D8}\u{1F3FD}";
    const CHARACTER_PERSON_IN_LOTUS_POSITION_MEDIUM_DARK_SKIN_TONE = "\u{1F9D8}\u{1F3FE}";
    const CHARACTER_PERSON_IN_LOTUS_POSITION_DARK_SKIN_TONE = "\u{1F9D8}\u{1F3FF}";
    const CHARACTER_MAN_IN_LOTUS_POSITION = "\u{1F9D8}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_LOTUS_POSITION_LIGHT_SKIN_TONE = "\u{1F9D8}\u{1F3FB}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_LOTUS_POSITION_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D8}\u{1F3FC}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_LOTUS_POSITION_MEDIUM_SKIN_TONE = "\u{1F9D8}\u{1F3FD}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_LOTUS_POSITION_MEDIUM_DARK_SKIN_TONE = "\u{1F9D8}\u{1F3FE}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_MAN_IN_LOTUS_POSITION_DARK_SKIN_TONE = "\u{1F9D8}\u{1F3FF}\u{200D}\u{2642}\u{FE0F}";
    const CHARACTER_WOMAN_IN_LOTUS_POSITION = "\u{1F9D8}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_LOTUS_POSITION_LIGHT_SKIN_TONE = "\u{1F9D8}\u{1F3FB}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_LOTUS_POSITION_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D8}\u{1F3FC}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_LOTUS_POSITION_MEDIUM_SKIN_TONE = "\u{1F9D8}\u{1F3FD}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_LOTUS_POSITION_MEDIUM_DARK_SKIN_TONE = "\u{1F9D8}\u{1F3FE}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_WOMAN_IN_LOTUS_POSITION_DARK_SKIN_TONE = "\u{1F9D8}\u{1F3FF}\u{200D}\u{2640}\u{FE0F}";
    const CHARACTER_PERSON_TAKING_BATH = "\u{1F6C0}";
    const CHARACTER_PERSON_TAKING_BATH_LIGHT_SKIN_TONE = "\u{1F6C0}\u{1F3FB}";
    const CHARACTER_PERSON_TAKING_BATH_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6C0}\u{1F3FC}";
    const CHARACTER_PERSON_TAKING_BATH_MEDIUM_SKIN_TONE = "\u{1F6C0}\u{1F3FD}";
    const CHARACTER_PERSON_TAKING_BATH_MEDIUM_DARK_SKIN_TONE = "\u{1F6C0}\u{1F3FE}";
    const CHARACTER_PERSON_TAKING_BATH_DARK_SKIN_TONE = "\u{1F6C0}\u{1F3FF}";
    const CHARACTER_PERSON_IN_BED = "\u{1F6CC}";
    const CHARACTER_PERSON_IN_BED_LIGHT_SKIN_TONE = "\u{1F6CC}\u{1F3FB}";
    const CHARACTER_PERSON_IN_BED_MEDIUM_LIGHT_SKIN_TONE = "\u{1F6CC}\u{1F3FC}";
    const CHARACTER_PERSON_IN_BED_MEDIUM_SKIN_TONE = "\u{1F6CC}\u{1F3FD}";
    const CHARACTER_PERSON_IN_BED_MEDIUM_DARK_SKIN_TONE = "\u{1F6CC}\u{1F3FE}";
    const CHARACTER_PERSON_IN_BED_DARK_SKIN_TONE = "\u{1F6CC}\u{1F3FF}";
    // ##### Emoji subgroup: FAMILY #####
    const CHARACTER_PEOPLE_HOLDING_HANDS = "\u{1F9D1}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_PEOPLE_HOLDING_HANDS_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_WOMEN_HOLDING_HANDS = "\u{1F46D}";
    const CHARACTER_WOMEN_HOLDING_HANDS_LIGHT_SKIN_TONE = "\u{1F46D}\u{1F3FB}";
    const CHARACTER_WOMEN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_WOMEN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_WOMEN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_WOMEN_HOLDING_HANDS_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F46D}\u{1F3FC}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_SKIN_TONE = "\u{1F46D}\u{1F3FD}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F46D}\u{1F3FE}";
    const CHARACTER_WOMEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_WOMEN_HOLDING_HANDS_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_WOMEN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_WOMEN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_WOMEN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_WOMEN_HOLDING_HANDS_DARK_SKIN_TONE = "\u{1F46D}\u{1F3FF}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS = "\u{1F46B}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_LIGHT_SKIN_TONE = "\u{1F46B}\u{1F3FB}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F46B}\u{1F3FC}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_SKIN_TONE = "\u{1F46B}\u{1F3FD}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F46B}\u{1F3FE}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_WOMAN_AND_MAN_HOLDING_HANDS_DARK_SKIN_TONE = "\u{1F46B}\u{1F3FF}";
    const CHARACTER_MEN_HOLDING_HANDS = "\u{1F46C}";
    const CHARACTER_MEN_HOLDING_HANDS_LIGHT_SKIN_TONE = "\u{1F46C}\u{1F3FB}";
    const CHARACTER_MEN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_MEN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_MEN_HOLDING_HANDS_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_MEN_HOLDING_HANDS_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F46C}\u{1F3FC}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_SKIN_TONE = "\u{1F46C}\u{1F3FD}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE = "\u{1F46C}\u{1F3FE}";
    const CHARACTER_MEN_HOLDING_HANDS_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_MEN_HOLDING_HANDS_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_MEN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_MEN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_MEN_HOLDING_HANDS_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{1F91D}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_MEN_HOLDING_HANDS_DARK_SKIN_TONE = "\u{1F46C}\u{1F3FF}";
    const CHARACTER_KISS = "\u{1F48F}";
    const CHARACTER_KISS_LIGHT_SKIN_TONE = "\u{1F48F}\u{1F3FB}";
    const CHARACTER_KISS_MEDIUM_LIGHT_SKIN_TONE = "\u{1F48F}\u{1F3FC}";
    const CHARACTER_KISS_MEDIUM_SKIN_TONE = "\u{1F48F}\u{1F3FD}";
    const CHARACTER_KISS_MEDIUM_DARK_SKIN_TONE = "\u{1F48F}\u{1F3FE}";
    const CHARACTER_KISS_DARK_SKIN_TONE = "\u{1F48F}\u{1F3FF}";
    const CHARACTER_KISS_PERSON_PERSON_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_KISS_PERSON_PERSON_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_KISS_PERSON_PERSON_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_KISS_PERSON_PERSON_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_KISS_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_KISS_PERSON_PERSON_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_KISS_PERSON_PERSON_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_KISS_PERSON_PERSON_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_KISS_PERSON_PERSON_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_MAN = "\u{1F469}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}";
    const CHARACTER_KISS_WOMAN_MAN_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_MAN_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_MAN_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_MAN_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_MAN_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_MAN_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_MAN_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_MAN_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_MAN_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_MAN_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_MAN_MAN = "\u{1F468}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}";
    const CHARACTER_KISS_MAN_MAN_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_MAN_MAN_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_MAN_MAN_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_MAN_MAN_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_MAN_MAN_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_MAN_MAN_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_MAN_MAN_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_KISS_MAN_MAN_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_KISS_MAN_MAN_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_KISS_MAN_MAN_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_KISS_MAN_MAN_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_WOMAN = "\u{1F469}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}";
    const CHARACTER_KISS_WOMAN_WOMAN_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_WOMAN_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_WOMAN_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_WOMAN_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_WOMAN_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_KISS_WOMAN_WOMAN_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_KISS_WOMAN_WOMAN_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_KISS_WOMAN_WOMAN_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_KISS_WOMAN_WOMAN_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_KISS_WOMAN_WOMAN_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART = "\u{1F491}";
    const CHARACTER_COUPLE_WITH_HEART_LIGHT_SKIN_TONE = "\u{1F491}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_MEDIUM_LIGHT_SKIN_TONE = "\u{1F491}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_MEDIUM_SKIN_TONE = "\u{1F491}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_MEDIUM_DARK_SKIN_TONE = "\u{1F491}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_DARK_SKIN_TONE = "\u{1F491}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_PERSON_PERSON_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F9D1}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F9D1}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN = "\u{1F469}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_MAN_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN = "\u{1F468}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F468}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_MAN_MAN_DARK_SKIN_TONE = "\u{1F468}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F468}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN = "\u{1F469}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_LIGHT_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FB}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_LIGHT_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FC}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FD}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_MEDIUM_DARK_SKIN_TONE_DARK_SKIN_TONE = "\u{1F469}\u{1F3FE}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_DARK_SKIN_TONE_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FB}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_DARK_SKIN_TONE_MEDIUM_LIGHT_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FC}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_DARK_SKIN_TONE_MEDIUM_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FD}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_DARK_SKIN_TONE_MEDIUM_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FE}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN_WOMAN_DARK_SKIN_TONE = "\u{1F469}\u{1F3FF}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F469}\u{1F3FF}";
    const CHARACTER_FAMILY = "\u{1F46A}";
    const CHARACTER_FAMILY_MAN_WOMAN_BOY = "\u{1F468}\u{200D}\u{1F469}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_WOMAN_GIRL = "\u{1F468}\u{200D}\u{1F469}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_MAN_WOMAN_GIRL_BOY = "\u{1F468}\u{200D}\u{1F469}\u{200D}\u{1F467}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_WOMAN_BOY_BOY = "\u{1F468}\u{200D}\u{1F469}\u{200D}\u{1F466}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_WOMAN_GIRL_GIRL = "\u{1F468}\u{200D}\u{1F469}\u{200D}\u{1F467}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_MAN_MAN_BOY = "\u{1F468}\u{200D}\u{1F468}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_MAN_GIRL = "\u{1F468}\u{200D}\u{1F468}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_MAN_MAN_GIRL_BOY = "\u{1F468}\u{200D}\u{1F468}\u{200D}\u{1F467}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_MAN_BOY_BOY = "\u{1F468}\u{200D}\u{1F468}\u{200D}\u{1F466}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_MAN_GIRL_GIRL = "\u{1F468}\u{200D}\u{1F468}\u{200D}\u{1F467}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_WOMAN_WOMAN_BOY = "\u{1F469}\u{200D}\u{1F469}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_WOMAN_WOMAN_GIRL = "\u{1F469}\u{200D}\u{1F469}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_WOMAN_WOMAN_GIRL_BOY = "\u{1F469}\u{200D}\u{1F469}\u{200D}\u{1F467}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_WOMAN_WOMAN_BOY_BOY = "\u{1F469}\u{200D}\u{1F469}\u{200D}\u{1F466}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_WOMAN_WOMAN_GIRL_GIRL = "\u{1F469}\u{200D}\u{1F469}\u{200D}\u{1F467}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_MAN_BOY = "\u{1F468}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_BOY_BOY = "\u{1F468}\u{200D}\u{1F466}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_GIRL = "\u{1F468}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_MAN_GIRL_BOY = "\u{1F468}\u{200D}\u{1F467}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_MAN_GIRL_GIRL = "\u{1F468}\u{200D}\u{1F467}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_WOMAN_BOY = "\u{1F469}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_WOMAN_BOY_BOY = "\u{1F469}\u{200D}\u{1F466}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_WOMAN_GIRL = "\u{1F469}\u{200D}\u{1F467}";
    const CHARACTER_FAMILY_WOMAN_GIRL_BOY = "\u{1F469}\u{200D}\u{1F467}\u{200D}\u{1F466}";
    const CHARACTER_FAMILY_WOMAN_GIRL_GIRL = "\u{1F469}\u{200D}\u{1F467}\u{200D}\u{1F467}";
    // ##### Emoji subgroup: PERSON-SYMBOL #####
    const CHARACTER_SPEAKING_HEAD = "\u{1F5E3}\u{FE0F}";
    const CHARACTER_BUST_IN_SILHOUETTE = "\u{1F464}";
    const CHARACTER_BUSTS_IN_SILHOUETTE = "\u{1F465}";
    const CHARACTER_PEOPLE_HUGGING = "\u{1FAC2}";
    const CHARACTER_FOOTPRINTS = "\u{1F463}";
    // ##### Emoji group: COMPONENT #####
    // ##### Emoji subgroup: SKIN-TONE #####
    const CHARACTER_LIGHT_SKIN_TONE = "\u{1F3FB}";
    const CHARACTER_MEDIUM_LIGHT_SKIN_TONE = "\u{1F3FC}";
    const CHARACTER_MEDIUM_SKIN_TONE = "\u{1F3FD}";
    const CHARACTER_MEDIUM_DARK_SKIN_TONE = "\u{1F3FE}";
    const CHARACTER_DARK_SKIN_TONE = "\u{1F3FF}";
    // ##### Emoji subgroup: HAIR-STYLE #####
    const CHARACTER_RED_HAIR = "\u{1F9B0}";
    const CHARACTER_CURLY_HAIR = "\u{1F9B1}";
    const CHARACTER_WHITE_HAIR = "\u{1F9B3}";
    const CHARACTER_BALD = "\u{1F9B2}";
    // ##### Emoji group: ANIMALS & NATURE #####
    // ##### Emoji subgroup: ANIMAL-MAMMAL #####
    const CHARACTER_MONKEY_FACE = "\u{1F435}";
    const CHARACTER_MONKEY = "\u{1F412}";
    const CHARACTER_GORILLA = "\u{1F98D}";
    const CHARACTER_ORANGUTAN = "\u{1F9A7}";
    const CHARACTER_DOG_FACE = "\u{1F436}";
    const CHARACTER_DOG = "\u{1F415}";
    const CHARACTER_GUIDE_DOG = "\u{1F9AE}";
    const CHARACTER_SERVICE_DOG = "\u{1F415}\u{200D}\u{1F9BA}";
    const CHARACTER_POODLE = "\u{1F429}";
    const CHARACTER_WOLF = "\u{1F43A}";
    const CHARACTER_FOX = "\u{1F98A}";
    const CHARACTER_RACCOON = "\u{1F99D}";
    const CHARACTER_CAT_FACE = "\u{1F431}";
    const CHARACTER_CAT = "\u{1F408}";
    const CHARACTER_BLACK_CAT = "\u{1F408}\u{200D}\u{2B1B}";
    const CHARACTER_LION = "\u{1F981}";
    const CHARACTER_TIGER_FACE = "\u{1F42F}";
    const CHARACTER_TIGER = "\u{1F405}";
    const CHARACTER_LEOPARD = "\u{1F406}";
    const CHARACTER_HORSE_FACE = "\u{1F434}";
    const CHARACTER_HORSE = "\u{1F40E}";
    const CHARACTER_UNICORN = "\u{1F984}";
    const CHARACTER_ZEBRA = "\u{1F993}";
    const CHARACTER_DEER = "\u{1F98C}";
    const CHARACTER_BISON = "\u{1F9AC}";
    const CHARACTER_COW_FACE = "\u{1F42E}";
    const CHARACTER_OX = "\u{1F402}";
    const CHARACTER_WATER_BUFFALO = "\u{1F403}";
    const CHARACTER_COW = "\u{1F404}";
    const CHARACTER_PIG_FACE = "\u{1F437}";
    const CHARACTER_PIG = "\u{1F416}";
    const CHARACTER_BOAR = "\u{1F417}";
    const CHARACTER_PIG_NOSE = "\u{1F43D}";
    const CHARACTER_RAM = "\u{1F40F}";
    const CHARACTER_EWE = "\u{1F411}";
    const CHARACTER_GOAT = "\u{1F410}";
    const CHARACTER_CAMEL = "\u{1F42A}";
    const CHARACTER_TWO_HUMP_CAMEL = "\u{1F42B}";
    const CHARACTER_LLAMA = "\u{1F999}";
    const CHARACTER_GIRAFFE = "\u{1F992}";
    const CHARACTER_ELEPHANT = "\u{1F418}";
    const CHARACTER_MAMMOTH = "\u{1F9A3}";
    const CHARACTER_RHINOCEROS = "\u{1F98F}";
    const CHARACTER_HIPPOPOTAMUS = "\u{1F99B}";
    const CHARACTER_MOUSE_FACE = "\u{1F42D}";
    const CHARACTER_MOUSE = "\u{1F401}";
    const CHARACTER_RAT = "\u{1F400}";
    const CHARACTER_HAMSTER = "\u{1F439}";
    const CHARACTER_RABBIT_FACE = "\u{1F430}";
    const CHARACTER_RABBIT = "\u{1F407}";
    const CHARACTER_CHIPMUNK = "\u{1F43F}\u{FE0F}";
    const CHARACTER_BEAVER = "\u{1F9AB}";
    const CHARACTER_HEDGEHOG = "\u{1F994}";
    const CHARACTER_BAT = "\u{1F987}";
    const CHARACTER_BEAR = "\u{1F43B}";
    const CHARACTER_POLAR_BEAR = "\u{1F43B}\u{200D}\u{2744}\u{FE0F}";
    const CHARACTER_KOALA = "\u{1F428}";
    const CHARACTER_PANDA = "\u{1F43C}";
    const CHARACTER_SLOTH = "\u{1F9A5}";
    const CHARACTER_OTTER = "\u{1F9A6}";
    const CHARACTER_SKUNK = "\u{1F9A8}";
    const CHARACTER_KANGAROO = "\u{1F998}";
    const CHARACTER_BADGER = "\u{1F9A1}";
    const CHARACTER_PAW_PRINTS = "\u{1F43E}";
    // ##### Emoji subgroup: ANIMAL-BIRD #####
    const CHARACTER_TURKEY = "\u{1F983}";
    const CHARACTER_CHICKEN = "\u{1F414}";
    const CHARACTER_ROOSTER = "\u{1F413}";
    const CHARACTER_HATCHING_CHICK = "\u{1F423}";
    const CHARACTER_BABY_CHICK = "\u{1F424}";
    const CHARACTER_FRONT_FACING_BABY_CHICK = "\u{1F425}";
    const CHARACTER_BIRD = "\u{1F426}";
    const CHARACTER_PENGUIN = "\u{1F427}";
    const CHARACTER_DOVE = "\u{1F54A}\u{FE0F}";
    const CHARACTER_EAGLE = "\u{1F985}";
    const CHARACTER_DUCK = "\u{1F986}";
    const CHARACTER_SWAN = "\u{1F9A2}";
    const CHARACTER_OWL = "\u{1F989}";
    const CHARACTER_DODO = "\u{1F9A4}";
    const CHARACTER_FEATHER = "\u{1FAB6}";
    const CHARACTER_FLAMINGO = "\u{1F9A9}";
    const CHARACTER_PEACOCK = "\u{1F99A}";
    const CHARACTER_PARROT = "\u{1F99C}";
    // ##### Emoji subgroup: ANIMAL-AMPHIBIAN #####
    const CHARACTER_FROG = "\u{1F438}";
    // ##### Emoji subgroup: ANIMAL-REPTILE #####
    const CHARACTER_CROCODILE = "\u{1F40A}";
    const CHARACTER_TURTLE = "\u{1F422}";
    const CHARACTER_LIZARD = "\u{1F98E}";
    const CHARACTER_SNAKE = "\u{1F40D}";
    const CHARACTER_DRAGON_FACE = "\u{1F432}";
    const CHARACTER_DRAGON = "\u{1F409}";
    const CHARACTER_SAUROPOD = "\u{1F995}";
    const CHARACTER_T_REX = "\u{1F996}";
    // ##### Emoji subgroup: ANIMAL-MARINE #####
    const CHARACTER_SPOUTING_WHALE = "\u{1F433}";
    const CHARACTER_WHALE = "\u{1F40B}";
    const CHARACTER_DOLPHIN = "\u{1F42C}";
    const CHARACTER_SEAL = "\u{1F9AD}";
    const CHARACTER_FISH = "\u{1F41F}";
    const CHARACTER_TROPICAL_FISH = "\u{1F420}";
    const CHARACTER_BLOWFISH = "\u{1F421}";
    const CHARACTER_SHARK = "\u{1F988}";
    const CHARACTER_OCTOPUS = "\u{1F419}";
    const CHARACTER_SPIRAL_SHELL = "\u{1F41A}";
    const CHARACTER_CORAL = "\u{1FAB8}";
    // ##### Emoji subgroup: ANIMAL-BUG #####
    const CHARACTER_SNAIL = "\u{1F40C}";
    const CHARACTER_BUTTERFLY = "\u{1F98B}";
    const CHARACTER_BUG = "\u{1F41B}";
    const CHARACTER_ANT = "\u{1F41C}";
    const CHARACTER_HONEYBEE = "\u{1F41D}";
    const CHARACTER_BEETLE = "\u{1FAB2}";
    const CHARACTER_LADY_BEETLE = "\u{1F41E}";
    const CHARACTER_CRICKET = "\u{1F997}";
    const CHARACTER_COCKROACH = "\u{1FAB3}";
    const CHARACTER_SPIDER = "\u{1F577}\u{FE0F}";
    const CHARACTER_SPIDER_WEB = "\u{1F578}\u{FE0F}";
    const CHARACTER_SCORPION = "\u{1F982}";
    const CHARACTER_MOSQUITO = "\u{1F99F}";
    const CHARACTER_FLY = "\u{1FAB0}";
    const CHARACTER_WORM = "\u{1FAB1}";
    const CHARACTER_MICROBE = "\u{1F9A0}";
    // ##### Emoji subgroup: PLANT-FLOWER #####
    const CHARACTER_BOUQUET = "\u{1F490}";
    const CHARACTER_CHERRY_BLOSSOM = "\u{1F338}";
    const CHARACTER_WHITE_FLOWER = "\u{1F4AE}";
    const CHARACTER_LOTUS = "\u{1FAB7}";
    const CHARACTER_ROSETTE = "\u{1F3F5}\u{FE0F}";
    const CHARACTER_ROSE = "\u{1F339}";
    const CHARACTER_WILTED_FLOWER = "\u{1F940}";
    const CHARACTER_HIBISCUS = "\u{1F33A}";
    const CHARACTER_SUNFLOWER = "\u{1F33B}";
    const CHARACTER_BLOSSOM = "\u{1F33C}";
    const CHARACTER_TULIP = "\u{1F337}";
    // ##### Emoji subgroup: PLANT-OTHER #####
    const CHARACTER_SEEDLING = "\u{1F331}";
    const CHARACTER_POTTED_PLANT = "\u{1FAB4}";
    const CHARACTER_EVERGREEN_TREE = "\u{1F332}";
    const CHARACTER_DECIDUOUS_TREE = "\u{1F333}";
    const CHARACTER_PALM_TREE = "\u{1F334}";
    const CHARACTER_CACTUS = "\u{1F335}";
    const CHARACTER_SHEAF_OF_RICE = "\u{1F33E}";
    const CHARACTER_HERB = "\u{1F33F}";
    const CHARACTER_SHAMROCK = "\u{2618}\u{FE0F}";
    const CHARACTER_FOUR_LEAF_CLOVER = "\u{1F340}";
    const CHARACTER_MAPLE_LEAF = "\u{1F341}";
    const CHARACTER_FALLEN_LEAF = "\u{1F342}";
    const CHARACTER_LEAF_FLUTTERING_IN_WIND = "\u{1F343}";
    const CHARACTER_EMPTY_NEST = "\u{1FAB9}";
    const CHARACTER_NEST_WITH_EGGS = "\u{1FABA}";
    // ##### Emoji group: FOOD & DRINK #####
    // ##### Emoji subgroup: FOOD-FRUIT #####
    const CHARACTER_GRAPES = "\u{1F347}";
    const CHARACTER_MELON = "\u{1F348}";
    const CHARACTER_WATERMELON = "\u{1F349}";
    const CHARACTER_TANGERINE = "\u{1F34A}";
    const CHARACTER_LEMON = "\u{1F34B}";
    const CHARACTER_BANANA = "\u{1F34C}";
    const CHARACTER_PINEAPPLE = "\u{1F34D}";
    const CHARACTER_MANGO = "\u{1F96D}";
    const CHARACTER_RED_APPLE = "\u{1F34E}";
    const CHARACTER_GREEN_APPLE = "\u{1F34F}";
    const CHARACTER_PEAR = "\u{1F350}";
    const CHARACTER_PEACH = "\u{1F351}";
    const CHARACTER_CHERRIES = "\u{1F352}";
    const CHARACTER_STRAWBERRY = "\u{1F353}";
    const CHARACTER_BLUEBERRIES = "\u{1FAD0}";
    const CHARACTER_KIWI_FRUIT = "\u{1F95D}";
    const CHARACTER_TOMATO = "\u{1F345}";
    const CHARACTER_OLIVE = "\u{1FAD2}";
    const CHARACTER_COCONUT = "\u{1F965}";
    // ##### Emoji subgroup: FOOD-VEGETABLE #####
    const CHARACTER_AVOCADO = "\u{1F951}";
    const CHARACTER_EGGPLANT = "\u{1F346}";
    const CHARACTER_POTATO = "\u{1F954}";
    const CHARACTER_CARROT = "\u{1F955}";
    const CHARACTER_EAR_OF_CORN = "\u{1F33D}";
    const CHARACTER_HOT_PEPPER = "\u{1F336}\u{FE0F}";
    const CHARACTER_BELL_PEPPER = "\u{1FAD1}";
    const CHARACTER_CUCUMBER = "\u{1F952}";
    const CHARACTER_LEAFY_GREEN = "\u{1F96C}";
    const CHARACTER_BROCCOLI = "\u{1F966}";
    const CHARACTER_GARLIC = "\u{1F9C4}";
    const CHARACTER_ONION = "\u{1F9C5}";
    const CHARACTER_MUSHROOM = "\u{1F344}";
    const CHARACTER_PEANUTS = "\u{1F95C}";
    const CHARACTER_BEANS = "\u{1FAD8}";
    const CHARACTER_CHESTNUT = "\u{1F330}";
    // ##### Emoji subgroup: FOOD-PREPARED #####
    const CHARACTER_BREAD = "\u{1F35E}";
    const CHARACTER_CROISSANT = "\u{1F950}";
    const CHARACTER_BAGUETTE_BREAD = "\u{1F956}";
    const CHARACTER_FLATBREAD = "\u{1FAD3}";
    const CHARACTER_PRETZEL = "\u{1F968}";
    const CHARACTER_BAGEL = "\u{1F96F}";
    const CHARACTER_PANCAKES = "\u{1F95E}";
    const CHARACTER_WAFFLE = "\u{1F9C7}";
    const CHARACTER_CHEESE_WEDGE = "\u{1F9C0}";
    const CHARACTER_MEAT_ON_BONE = "\u{1F356}";
    const CHARACTER_POULTRY_LEG = "\u{1F357}";
    const CHARACTER_CUT_OF_MEAT = "\u{1F969}";
    const CHARACTER_BACON = "\u{1F953}";
    const CHARACTER_HAMBURGER = "\u{1F354}";
    const CHARACTER_FRENCH_FRIES = "\u{1F35F}";
    const CHARACTER_PIZZA = "\u{1F355}";
    const CHARACTER_HOT_DOG = "\u{1F32D}";
    const CHARACTER_SANDWICH = "\u{1F96A}";
    const CHARACTER_TACO = "\u{1F32E}";
    const CHARACTER_BURRITO = "\u{1F32F}";
    const CHARACTER_TAMALE = "\u{1FAD4}";
    const CHARACTER_STUFFED_FLATBREAD = "\u{1F959}";
    const CHARACTER_FALAFEL = "\u{1F9C6}";
    const CHARACTER_EGG = "\u{1F95A}";
    const CHARACTER_COOKING = "\u{1F373}";
    const CHARACTER_SHALLOW_PAN_OF_FOOD = "\u{1F958}";
    const CHARACTER_POT_OF_FOOD = "\u{1F372}";
    const CHARACTER_FONDUE = "\u{1FAD5}";
    const CHARACTER_BOWL_WITH_SPOON = "\u{1F963}";
    const CHARACTER_GREEN_SALAD = "\u{1F957}";
    const CHARACTER_POPCORN = "\u{1F37F}";
    const CHARACTER_BUTTER = "\u{1F9C8}";
    const CHARACTER_SALT = "\u{1F9C2}";
    const CHARACTER_CANNED_FOOD = "\u{1F96B}";
    // ##### Emoji subgroup: FOOD-ASIAN #####
    const CHARACTER_BENTO_BOX = "\u{1F371}";
    const CHARACTER_RICE_CRACKER = "\u{1F358}";
    const CHARACTER_RICE_BALL = "\u{1F359}";
    const CHARACTER_COOKED_RICE = "\u{1F35A}";
    const CHARACTER_CURRY_RICE = "\u{1F35B}";
    const CHARACTER_STEAMING_BOWL = "\u{1F35C}";
    const CHARACTER_SPAGHETTI = "\u{1F35D}";
    const CHARACTER_ROASTED_SWEET_POTATO = "\u{1F360}";
    const CHARACTER_ODEN = "\u{1F362}";
    const CHARACTER_SUSHI = "\u{1F363}";
    const CHARACTER_FRIED_SHRIMP = "\u{1F364}";
    const CHARACTER_FISH_CAKE_WITH_SWIRL = "\u{1F365}";
    const CHARACTER_MOON_CAKE = "\u{1F96E}";
    const CHARACTER_DANGO = "\u{1F361}";
    const CHARACTER_DUMPLING = "\u{1F95F}";
    const CHARACTER_FORTUNE_COOKIE = "\u{1F960}";
    const CHARACTER_TAKEOUT_BOX = "\u{1F961}";
    // ##### Emoji subgroup: FOOD-MARINE #####
    const CHARACTER_CRAB = "\u{1F980}";
    const CHARACTER_LOBSTER = "\u{1F99E}";
    const CHARACTER_SHRIMP = "\u{1F990}";
    const CHARACTER_SQUID = "\u{1F991}";
    const CHARACTER_OYSTER = "\u{1F9AA}";
    // ##### Emoji subgroup: FOOD-SWEET #####
    const CHARACTER_SOFT_ICE_CREAM = "\u{1F366}";
    const CHARACTER_SHAVED_ICE = "\u{1F367}";
    const CHARACTER_ICE_CREAM = "\u{1F368}";
    const CHARACTER_DOUGHNUT = "\u{1F369}";
    const CHARACTER_COOKIE = "\u{1F36A}";
    const CHARACTER_BIRTHDAY_CAKE = "\u{1F382}";
    const CHARACTER_SHORTCAKE = "\u{1F370}";
    const CHARACTER_CUPCAKE = "\u{1F9C1}";
    const CHARACTER_PIE = "\u{1F967}";
    const CHARACTER_CHOCOLATE_BAR = "\u{1F36B}";
    const CHARACTER_CANDY = "\u{1F36C}";
    const CHARACTER_LOLLIPOP = "\u{1F36D}";
    const CHARACTER_CUSTARD = "\u{1F36E}";
    const CHARACTER_HONEY_POT = "\u{1F36F}";
    // ##### Emoji subgroup: DRINK #####
    const CHARACTER_BABY_BOTTLE = "\u{1F37C}";
    const CHARACTER_GLASS_OF_MILK = "\u{1F95B}";
    const CHARACTER_HOT_BEVERAGE = "\u{2615}";
    const CHARACTER_TEAPOT = "\u{1FAD6}";
    const CHARACTER_TEACUP_WITHOUT_HANDLE = "\u{1F375}";
    const CHARACTER_SAKE = "\u{1F376}";
    const CHARACTER_BOTTLE_WITH_POPPING_CORK = "\u{1F37E}";
    const CHARACTER_WINE_GLASS = "\u{1F377}";
    const CHARACTER_COCKTAIL_GLASS = "\u{1F378}";
    const CHARACTER_TROPICAL_DRINK = "\u{1F379}";
    const CHARACTER_BEER_MUG = "\u{1F37A}";
    const CHARACTER_CLINKING_BEER_MUGS = "\u{1F37B}";
    const CHARACTER_CLINKING_GLASSES = "\u{1F942}";
    const CHARACTER_TUMBLER_GLASS = "\u{1F943}";
    const CHARACTER_POURING_LIQUID = "\u{1FAD7}";
    const CHARACTER_CUP_WITH_STRAW = "\u{1F964}";
    const CHARACTER_BUBBLE_TEA = "\u{1F9CB}";
    const CHARACTER_BEVERAGE_BOX = "\u{1F9C3}";
    const CHARACTER_MATE = "\u{1F9C9}";
    const CHARACTER_ICE = "\u{1F9CA}";
    // ##### Emoji subgroup: DISHWARE #####
    const CHARACTER_CHOPSTICKS = "\u{1F962}";
    const CHARACTER_FORK_AND_KNIFE_WITH_PLATE = "\u{1F37D}\u{FE0F}";
    const CHARACTER_FORK_AND_KNIFE = "\u{1F374}";
    const CHARACTER_SPOON = "\u{1F944}";
    const CHARACTER_KITCHEN_KNIFE = "\u{1F52A}";
    const CHARACTER_JAR = "\u{1FAD9}";
    const CHARACTER_AMPHORA = "\u{1F3FA}";
    // ##### Emoji group: TRAVEL & PLACES #####
    // ##### Emoji subgroup: PLACE-MAP #####
    const CHARACTER_GLOBE_SHOWING_EUROPE_AFRICA = "\u{1F30D}";
    const CHARACTER_GLOBE_SHOWING_AMERICAS = "\u{1F30E}";
    const CHARACTER_GLOBE_SHOWING_ASIA_AUSTRALIA = "\u{1F30F}";
    const CHARACTER_GLOBE_WITH_MERIDIANS = "\u{1F310}";
    const CHARACTER_WORLD_MAP = "\u{1F5FA}\u{FE0F}";
    const CHARACTER_MAP_OF_JAPAN = "\u{1F5FE}";
    const CHARACTER_COMPASS = "\u{1F9ED}";
    // ##### Emoji subgroup: PLACE-GEOGRAPHIC #####
    const CHARACTER_SNOW_CAPPED_MOUNTAIN = "\u{1F3D4}\u{FE0F}";
    const CHARACTER_MOUNTAIN = "\u{26F0}\u{FE0F}";
    const CHARACTER_VOLCANO = "\u{1F30B}";
    const CHARACTER_MOUNT_FUJI = "\u{1F5FB}";
    const CHARACTER_CAMPING = "\u{1F3D5}\u{FE0F}";
    const CHARACTER_BEACH_WITH_UMBRELLA = "\u{1F3D6}\u{FE0F}";
    const CHARACTER_DESERT = "\u{1F3DC}\u{FE0F}";
    const CHARACTER_DESERT_ISLAND = "\u{1F3DD}\u{FE0F}";
    const CHARACTER_NATIONAL_PARK = "\u{1F3DE}\u{FE0F}";
    // ##### Emoji subgroup: PLACE-BUILDING #####
    const CHARACTER_STADIUM = "\u{1F3DF}\u{FE0F}";
    const CHARACTER_CLASSICAL_BUILDING = "\u{1F3DB}\u{FE0F}";
    const CHARACTER_BUILDING_CONSTRUCTION = "\u{1F3D7}\u{FE0F}";
    const CHARACTER_BRICK = "\u{1F9F1}";
    const CHARACTER_ROCK = "\u{1FAA8}";
    const CHARACTER_WOOD = "\u{1FAB5}";
    const CHARACTER_HUT = "\u{1F6D6}";
    const CHARACTER_HOUSES = "\u{1F3D8}\u{FE0F}";
    const CHARACTER_DERELICT_HOUSE = "\u{1F3DA}\u{FE0F}";
    const CHARACTER_HOUSE = "\u{1F3E0}";
    const CHARACTER_HOUSE_WITH_GARDEN = "\u{1F3E1}";
    const CHARACTER_OFFICE_BUILDING = "\u{1F3E2}";
    const CHARACTER_JAPANESE_POST_OFFICE = "\u{1F3E3}";
    const CHARACTER_POST_OFFICE = "\u{1F3E4}";
    const CHARACTER_HOSPITAL = "\u{1F3E5}";
    const CHARACTER_BANK = "\u{1F3E6}";
    const CHARACTER_HOTEL = "\u{1F3E8}";
    const CHARACTER_LOVE_HOTEL = "\u{1F3E9}";
    const CHARACTER_CONVENIENCE_STORE = "\u{1F3EA}";
    const CHARACTER_SCHOOL = "\u{1F3EB}";
    const CHARACTER_DEPARTMENT_STORE = "\u{1F3EC}";
    const CHARACTER_FACTORY = "\u{1F3ED}";
    const CHARACTER_JAPANESE_CASTLE = "\u{1F3EF}";
    const CHARACTER_CASTLE = "\u{1F3F0}";
    const CHARACTER_WEDDING = "\u{1F492}";
    const CHARACTER_TOKYO_TOWER = "\u{1F5FC}";
    const CHARACTER_STATUE_OF_LIBERTY = "\u{1F5FD}";
    // ##### Emoji subgroup: PLACE-RELIGIOUS #####
    const CHARACTER_CHURCH = "\u{26EA}";
    const CHARACTER_MOSQUE = "\u{1F54C}";
    const CHARACTER_HINDU_TEMPLE = "\u{1F6D5}";
    const CHARACTER_SYNAGOGUE = "\u{1F54D}";
    const CHARACTER_SHINTO_SHRINE = "\u{26E9}\u{FE0F}";
    const CHARACTER_KAABA = "\u{1F54B}";
    // ##### Emoji subgroup: PLACE-OTHER #####
    const CHARACTER_FOUNTAIN = "\u{26F2}";
    const CHARACTER_TENT = "\u{26FA}";
    const CHARACTER_FOGGY = "\u{1F301}";
    const CHARACTER_NIGHT_WITH_STARS = "\u{1F303}";
    const CHARACTER_CITYSCAPE = "\u{1F3D9}\u{FE0F}";
    const CHARACTER_SUNRISE_OVER_MOUNTAINS = "\u{1F304}";
    const CHARACTER_SUNRISE = "\u{1F305}";
    const CHARACTER_CITYSCAPE_AT_DUSK = "\u{1F306}";
    const CHARACTER_SUNSET = "\u{1F307}";
    const CHARACTER_BRIDGE_AT_NIGHT = "\u{1F309}";
    const CHARACTER_HOT_SPRINGS = "\u{2668}\u{FE0F}";
    const CHARACTER_CAROUSEL_HORSE = "\u{1F3A0}";
    const CHARACTER_PLAYGROUND_SLIDE = "\u{1F6DD}";
    const CHARACTER_FERRIS_WHEEL = "\u{1F3A1}";
    const CHARACTER_ROLLER_COASTER = "\u{1F3A2}";
    const CHARACTER_BARBER_POLE = "\u{1F488}";
    const CHARACTER_CIRCUS_TENT = "\u{1F3AA}";
    // ##### Emoji subgroup: TRANSPORT-GROUND #####
    const CHARACTER_LOCOMOTIVE = "\u{1F682}";
    const CHARACTER_RAILWAY_CAR = "\u{1F683}";
    const CHARACTER_HIGH_SPEED_TRAIN = "\u{1F684}";
    const CHARACTER_BULLET_TRAIN = "\u{1F685}";
    const CHARACTER_TRAIN = "\u{1F686}";
    const CHARACTER_METRO = "\u{1F687}";
    const CHARACTER_LIGHT_RAIL = "\u{1F688}";
    const CHARACTER_STATION = "\u{1F689}";
    const CHARACTER_TRAM = "\u{1F68A}";
    const CHARACTER_MONORAIL = "\u{1F69D}";
    const CHARACTER_MOUNTAIN_RAILWAY = "\u{1F69E}";
    const CHARACTER_TRAM_CAR = "\u{1F68B}";
    const CHARACTER_BUS = "\u{1F68C}";
    const CHARACTER_ONCOMING_BUS = "\u{1F68D}";
    const CHARACTER_TROLLEYBUS = "\u{1F68E}";
    const CHARACTER_MINIBUS = "\u{1F690}";
    const CHARACTER_AMBULANCE = "\u{1F691}";
    const CHARACTER_FIRE_ENGINE = "\u{1F692}";
    const CHARACTER_POLICE_CAR = "\u{1F693}";
    const CHARACTER_ONCOMING_POLICE_CAR = "\u{1F694}";
    const CHARACTER_TAXI = "\u{1F695}";
    const CHARACTER_ONCOMING_TAXI = "\u{1F696}";
    const CHARACTER_AUTOMOBILE = "\u{1F697}";
    const CHARACTER_ONCOMING_AUTOMOBILE = "\u{1F698}";
    const CHARACTER_SPORT_UTILITY_VEHICLE = "\u{1F699}";
    const CHARACTER_PICKUP_TRUCK = "\u{1F6FB}";
    const CHARACTER_DELIVERY_TRUCK = "\u{1F69A}";
    const CHARACTER_ARTICULATED_LORRY = "\u{1F69B}";
    const CHARACTER_TRACTOR = "\u{1F69C}";
    const CHARACTER_RACING_CAR = "\u{1F3CE}\u{FE0F}";
    const CHARACTER_MOTORCYCLE = "\u{1F3CD}\u{FE0F}";
    const CHARACTER_MOTOR_SCOOTER = "\u{1F6F5}";
    const CHARACTER_MANUAL_WHEELCHAIR = "\u{1F9BD}";
    const CHARACTER_MOTORIZED_WHEELCHAIR = "\u{1F9BC}";
    const CHARACTER_AUTO_RICKSHAW = "\u{1F6FA}";
    const CHARACTER_BICYCLE = "\u{1F6B2}";
    const CHARACTER_KICK_SCOOTER = "\u{1F6F4}";
    const CHARACTER_SKATEBOARD = "\u{1F6F9}";
    const CHARACTER_ROLLER_SKATE = "\u{1F6FC}";
    const CHARACTER_BUS_STOP = "\u{1F68F}";
    const CHARACTER_MOTORWAY = "\u{1F6E3}\u{FE0F}";
    const CHARACTER_RAILWAY_TRACK = "\u{1F6E4}\u{FE0F}";
    const CHARACTER_OIL_DRUM = "\u{1F6E2}\u{FE0F}";
    const CHARACTER_FUEL_PUMP = "\u{26FD}";
    const CHARACTER_WHEEL = "\u{1F6DE}";
    const CHARACTER_POLICE_CAR_LIGHT = "\u{1F6A8}";
    const CHARACTER_HORIZONTAL_TRAFFIC_LIGHT = "\u{1F6A5}";
    const CHARACTER_VERTICAL_TRAFFIC_LIGHT = "\u{1F6A6}";
    const CHARACTER_STOP_SIGN = "\u{1F6D1}";
    const CHARACTER_CONSTRUCTION = "\u{1F6A7}";
    // ##### Emoji subgroup: TRANSPORT-WATER #####
    const CHARACTER_ANCHOR = "\u{2693}";
    const CHARACTER_RING_BUOY = "\u{1F6DF}";
    const CHARACTER_SAILBOAT = "\u{26F5}";
    const CHARACTER_CANOE = "\u{1F6F6}";
    const CHARACTER_SPEEDBOAT = "\u{1F6A4}";
    const CHARACTER_PASSENGER_SHIP = "\u{1F6F3}\u{FE0F}";
    const CHARACTER_FERRY = "\u{26F4}\u{FE0F}";
    const CHARACTER_MOTOR_BOAT = "\u{1F6E5}\u{FE0F}";
    const CHARACTER_SHIP = "\u{1F6A2}";
    // ##### Emoji subgroup: TRANSPORT-AIR #####
    const CHARACTER_AIRPLANE = "\u{2708}\u{FE0F}";
    const CHARACTER_SMALL_AIRPLANE = "\u{1F6E9}\u{FE0F}";
    const CHARACTER_AIRPLANE_DEPARTURE = "\u{1F6EB}";
    const CHARACTER_AIRPLANE_ARRIVAL = "\u{1F6EC}";
    const CHARACTER_PARACHUTE = "\u{1FA82}";
    const CHARACTER_SEAT = "\u{1F4BA}";
    const CHARACTER_HELICOPTER = "\u{1F681}";
    const CHARACTER_SUSPENSION_RAILWAY = "\u{1F69F}";
    const CHARACTER_MOUNTAIN_CABLEWAY = "\u{1F6A0}";
    const CHARACTER_AERIAL_TRAMWAY = "\u{1F6A1}";
    const CHARACTER_SATELLITE = "\u{1F6F0}\u{FE0F}";
    const CHARACTER_ROCKET = "\u{1F680}";
    const CHARACTER_FLYING_SAUCER = "\u{1F6F8}";
    // ##### Emoji subgroup: HOTEL #####
    const CHARACTER_BELLHOP_BELL = "\u{1F6CE}\u{FE0F}";
    const CHARACTER_LUGGAGE = "\u{1F9F3}";
    // ##### Emoji subgroup: TIME #####
    const CHARACTER_HOURGLASS_DONE = "\u{231B}";
    const CHARACTER_HOURGLASS_NOT_DONE = "\u{23F3}";
    const CHARACTER_WATCH = "\u{231A}";
    const CHARACTER_ALARM_CLOCK = "\u{23F0}";
    const CHARACTER_STOPWATCH = "\u{23F1}\u{FE0F}";
    const CHARACTER_TIMER_CLOCK = "\u{23F2}\u{FE0F}";
    const CHARACTER_MANTELPIECE_CLOCK = "\u{1F570}\u{FE0F}";
    const CHARACTER_TWELVE_O_CLOCK = "\u{1F55B}";
    const CHARACTER_TWELVE_THIRTY = "\u{1F567}";
    const CHARACTER_ONE_O_CLOCK = "\u{1F550}";
    const CHARACTER_ONE_THIRTY = "\u{1F55C}";
    const CHARACTER_TWO_O_CLOCK = "\u{1F551}";
    const CHARACTER_TWO_THIRTY = "\u{1F55D}";
    const CHARACTER_THREE_O_CLOCK = "\u{1F552}";
    const CHARACTER_THREE_THIRTY = "\u{1F55E}";
    const CHARACTER_FOUR_O_CLOCK = "\u{1F553}";
    const CHARACTER_FOUR_THIRTY = "\u{1F55F}";
    const CHARACTER_FIVE_O_CLOCK = "\u{1F554}";
    const CHARACTER_FIVE_THIRTY = "\u{1F560}";
    const CHARACTER_SIX_O_CLOCK = "\u{1F555}";
    const CHARACTER_SIX_THIRTY = "\u{1F561}";
    const CHARACTER_SEVEN_O_CLOCK = "\u{1F556}";
    const CHARACTER_SEVEN_THIRTY = "\u{1F562}";
    const CHARACTER_EIGHT_O_CLOCK = "\u{1F557}";
    const CHARACTER_EIGHT_THIRTY = "\u{1F563}";
    const CHARACTER_NINE_O_CLOCK = "\u{1F558}";
    const CHARACTER_NINE_THIRTY = "\u{1F564}";
    const CHARACTER_TEN_O_CLOCK = "\u{1F559}";
    const CHARACTER_TEN_THIRTY = "\u{1F565}";
    const CHARACTER_ELEVEN_O_CLOCK = "\u{1F55A}";
    const CHARACTER_ELEVEN_THIRTY = "\u{1F566}";
    // ##### Emoji subgroup: SKY & WEATHER #####
    const CHARACTER_NEW_MOON = "\u{1F311}";
    const CHARACTER_WAXING_CRESCENT_MOON = "\u{1F312}";
    const CHARACTER_FIRST_QUARTER_MOON = "\u{1F313}";
    const CHARACTER_WAXING_GIBBOUS_MOON = "\u{1F314}";
    const CHARACTER_FULL_MOON = "\u{1F315}";
    const CHARACTER_WANING_GIBBOUS_MOON = "\u{1F316}";
    const CHARACTER_LAST_QUARTER_MOON = "\u{1F317}";
    const CHARACTER_WANING_CRESCENT_MOON = "\u{1F318}";
    const CHARACTER_CRESCENT_MOON = "\u{1F319}";
    const CHARACTER_NEW_MOON_FACE = "\u{1F31A}";
    const CHARACTER_FIRST_QUARTER_MOON_FACE = "\u{1F31B}";
    const CHARACTER_LAST_QUARTER_MOON_FACE = "\u{1F31C}";
    const CHARACTER_THERMOMETER = "\u{1F321}\u{FE0F}";
    const CHARACTER_SUN = "\u{2600}\u{FE0F}";
    const CHARACTER_FULL_MOON_FACE = "\u{1F31D}";
    const CHARACTER_SUN_WITH_FACE = "\u{1F31E}";
    const CHARACTER_RINGED_PLANET = "\u{1FA90}";
    const CHARACTER_STAR = "\u{2B50}";
    const CHARACTER_GLOWING_STAR = "\u{1F31F}";
    const CHARACTER_SHOOTING_STAR = "\u{1F320}";
    const CHARACTER_MILKY_WAY = "\u{1F30C}";
    const CHARACTER_CLOUD = "\u{2601}\u{FE0F}";
    const CHARACTER_SUN_BEHIND_CLOUD = "\u{26C5}";
    const CHARACTER_CLOUD_WITH_LIGHTNING_AND_RAIN = "\u{26C8}\u{FE0F}";
    const CHARACTER_SUN_BEHIND_SMALL_CLOUD = "\u{1F324}\u{FE0F}";
    const CHARACTER_SUN_BEHIND_LARGE_CLOUD = "\u{1F325}\u{FE0F}";
    const CHARACTER_SUN_BEHIND_RAIN_CLOUD = "\u{1F326}\u{FE0F}";
    const CHARACTER_CLOUD_WITH_RAIN = "\u{1F327}\u{FE0F}";
    const CHARACTER_CLOUD_WITH_SNOW = "\u{1F328}\u{FE0F}";
    const CHARACTER_CLOUD_WITH_LIGHTNING = "\u{1F329}\u{FE0F}";
    const CHARACTER_TORNADO = "\u{1F32A}\u{FE0F}";
    const CHARACTER_FOG = "\u{1F32B}\u{FE0F}";
    const CHARACTER_WIND_FACE = "\u{1F32C}\u{FE0F}";
    const CHARACTER_CYCLONE = "\u{1F300}";
    const CHARACTER_RAINBOW = "\u{1F308}";
    const CHARACTER_CLOSED_UMBRELLA = "\u{1F302}";
    const CHARACTER_UMBRELLA = "\u{2602}\u{FE0F}";
    const CHARACTER_UMBRELLA_WITH_RAIN_DROPS = "\u{2614}";
    const CHARACTER_UMBRELLA_ON_GROUND = "\u{26F1}\u{FE0F}";
    const CHARACTER_HIGH_VOLTAGE = "\u{26A1}";
    const CHARACTER_SNOWFLAKE = "\u{2744}\u{FE0F}";
    const CHARACTER_SNOWMAN = "\u{2603}\u{FE0F}";
    const CHARACTER_SNOWMAN_WITHOUT_SNOW = "\u{26C4}";
    const CHARACTER_COMET = "\u{2604}\u{FE0F}";
    const CHARACTER_FIRE = "\u{1F525}";
    const CHARACTER_DROPLET = "\u{1F4A7}";
    const CHARACTER_WATER_WAVE = "\u{1F30A}";
    // ##### Emoji group: ACTIVITIES #####
    // ##### Emoji subgroup: EVENT #####
    const CHARACTER_JACK_O_LANTERN = "\u{1F383}";
    const CHARACTER_CHRISTMAS_TREE = "\u{1F384}";
    const CHARACTER_FIREWORKS = "\u{1F386}";
    const CHARACTER_SPARKLER = "\u{1F387}";
    const CHARACTER_FIRECRACKER = "\u{1F9E8}";
    const CHARACTER_SPARKLES = "\u{2728}";
    const CHARACTER_BALLOON = "\u{1F388}";
    const CHARACTER_PARTY_POPPER = "\u{1F389}";
    const CHARACTER_CONFETTI_BALL = "\u{1F38A}";
    const CHARACTER_TANABATA_TREE = "\u{1F38B}";
    const CHARACTER_PINE_DECORATION = "\u{1F38D}";
    const CHARACTER_JAPANESE_DOLLS = "\u{1F38E}";
    const CHARACTER_CARP_STREAMER = "\u{1F38F}";
    const CHARACTER_WIND_CHIME = "\u{1F390}";
    const CHARACTER_MOON_VIEWING_CEREMONY = "\u{1F391}";
    const CHARACTER_RED_ENVELOPE = "\u{1F9E7}";
    const CHARACTER_RIBBON = "\u{1F380}";
    const CHARACTER_WRAPPED_GIFT = "\u{1F381}";
    const CHARACTER_REMINDER_RIBBON = "\u{1F397}\u{FE0F}";
    const CHARACTER_ADMISSION_TICKETS = "\u{1F39F}\u{FE0F}";
    const CHARACTER_TICKET = "\u{1F3AB}";
    // ##### Emoji subgroup: AWARD-MEDAL #####
    const CHARACTER_MILITARY_MEDAL = "\u{1F396}\u{FE0F}";
    const CHARACTER_TROPHY = "\u{1F3C6}";
    const CHARACTER_SPORTS_MEDAL = "\u{1F3C5}";
    const CHARACTER_FIRST_PLACE_MEDAL = "\u{1F947}";
    const CHARACTER_SECOND_PLACE_MEDAL = "\u{1F948}";
    const CHARACTER_THIRD_PLACE_MEDAL = "\u{1F949}";
    // ##### Emoji subgroup: SPORT #####
    const CHARACTER_SOCCER_BALL = "\u{26BD}";
    const CHARACTER_BASEBALL = "\u{26BE}";
    const CHARACTER_SOFTBALL = "\u{1F94E}";
    const CHARACTER_BASKETBALL = "\u{1F3C0}";
    const CHARACTER_VOLLEYBALL = "\u{1F3D0}";
    const CHARACTER_AMERICAN_FOOTBALL = "\u{1F3C8}";
    const CHARACTER_RUGBY_FOOTBALL = "\u{1F3C9}";
    const CHARACTER_TENNIS = "\u{1F3BE}";
    const CHARACTER_FLYING_DISC = "\u{1F94F}";
    const CHARACTER_BOWLING = "\u{1F3B3}";
    const CHARACTER_CRICKET_GAME = "\u{1F3CF}";
    const CHARACTER_FIELD_HOCKEY = "\u{1F3D1}";
    const CHARACTER_ICE_HOCKEY = "\u{1F3D2}";
    const CHARACTER_LACROSSE = "\u{1F94D}";
    const CHARACTER_PING_PONG = "\u{1F3D3}";
    const CHARACTER_BADMINTON = "\u{1F3F8}";
    const CHARACTER_BOXING_GLOVE = "\u{1F94A}";
    const CHARACTER_MARTIAL_ARTS_UNIFORM = "\u{1F94B}";
    const CHARACTER_GOAL_NET = "\u{1F945}";
    const CHARACTER_FLAG_IN_HOLE = "\u{26F3}";
    const CHARACTER_ICE_SKATE = "\u{26F8}\u{FE0F}";
    const CHARACTER_FISHING_POLE = "\u{1F3A3}";
    const CHARACTER_DIVING_MASK = "\u{1F93F}";
    const CHARACTER_RUNNING_SHIRT = "\u{1F3BD}";
    const CHARACTER_SKIS = "\u{1F3BF}";
    const CHARACTER_SLED = "\u{1F6F7}";
    const CHARACTER_CURLING_STONE = "\u{1F94C}";
    // ##### Emoji subgroup: GAME #####
    const CHARACTER_BULLSEYE = "\u{1F3AF}";
    const CHARACTER_YO_YO = "\u{1FA80}";
    const CHARACTER_KITE = "\u{1FA81}";
    const CHARACTER_POOL_8_BALL = "\u{1F3B1}";
    const CHARACTER_CRYSTAL_BALL = "\u{1F52E}";
    const CHARACTER_MAGIC_WAND = "\u{1FA84}";
    const CHARACTER_NAZAR_AMULET = "\u{1F9FF}";
    const CHARACTER_HAMSA = "\u{1FAAC}";
    const CHARACTER_VIDEO_GAME = "\u{1F3AE}";
    const CHARACTER_JOYSTICK = "\u{1F579}\u{FE0F}";
    const CHARACTER_SLOT_MACHINE = "\u{1F3B0}";
    const CHARACTER_GAME_DIE = "\u{1F3B2}";
    const CHARACTER_PUZZLE_PIECE = "\u{1F9E9}";
    const CHARACTER_TEDDY_BEAR = "\u{1F9F8}";
    const CHARACTER_PINATA = "\u{1FA85}";
    const CHARACTER_MIRROR_BALL = "\u{1FAA9}";
    const CHARACTER_NESTING_DOLLS = "\u{1FA86}";
    const CHARACTER_SPADE_SUIT = "\u{2660}\u{FE0F}";
    const CHARACTER_HEART_SUIT = "\u{2665}\u{FE0F}";
    const CHARACTER_DIAMOND_SUIT = "\u{2666}\u{FE0F}";
    const CHARACTER_CLUB_SUIT = "\u{2663}\u{FE0F}";
    const CHARACTER_CHESS_PAWN = "\u{265F}\u{FE0F}";
    const CHARACTER_JOKER = "\u{1F0CF}";
    const CHARACTER_MAHJONG_RED_DRAGON = "\u{1F004}";
    const CHARACTER_FLOWER_PLAYING_CARDS = "\u{1F3B4}";
    // ##### Emoji subgroup: ARTS & CRAFTS #####
    const CHARACTER_PERFORMING_ARTS = "\u{1F3AD}";
    const CHARACTER_FRAMED_PICTURE = "\u{1F5BC}\u{FE0F}";
    const CHARACTER_ARTIST_PALETTE = "\u{1F3A8}";
    const CHARACTER_THREAD = "\u{1F9F5}";
    const CHARACTER_SEWING_NEEDLE = "\u{1FAA1}";
    const CHARACTER_YARN = "\u{1F9F6}";
    const CHARACTER_KNOT = "\u{1FAA2}";
    // ##### Emoji group: OBJECTS #####
    // ##### Emoji subgroup: CLOTHING #####
    const CHARACTER_GLASSES = "\u{1F453}";
    const CHARACTER_SUNGLASSES = "\u{1F576}\u{FE0F}";
    const CHARACTER_GOGGLES = "\u{1F97D}";
    const CHARACTER_LAB_COAT = "\u{1F97C}";
    const CHARACTER_SAFETY_VEST = "\u{1F9BA}";
    const CHARACTER_NECKTIE = "\u{1F454}";
    const CHARACTER_T_SHIRT = "\u{1F455}";
    const CHARACTER_JEANS = "\u{1F456}";
    const CHARACTER_SCARF = "\u{1F9E3}";
    const CHARACTER_GLOVES = "\u{1F9E4}";
    const CHARACTER_COAT = "\u{1F9E5}";
    const CHARACTER_SOCKS = "\u{1F9E6}";
    const CHARACTER_DRESS = "\u{1F457}";
    const CHARACTER_KIMONO = "\u{1F458}";
    const CHARACTER_SARI = "\u{1F97B}";
    const CHARACTER_ONE_PIECE_SWIMSUIT = "\u{1FA71}";
    const CHARACTER_BRIEFS = "\u{1FA72}";
    const CHARACTER_SHORTS = "\u{1FA73}";
    const CHARACTER_BIKINI = "\u{1F459}";
    const CHARACTER_WOMAN_S_CLOTHES = "\u{1F45A}";
    const CHARACTER_PURSE = "\u{1F45B}";
    const CHARACTER_HANDBAG = "\u{1F45C}";
    const CHARACTER_CLUTCH_BAG = "\u{1F45D}";
    const CHARACTER_SHOPPING_BAGS = "\u{1F6CD}\u{FE0F}";
    const CHARACTER_BACKPACK = "\u{1F392}";
    const CHARACTER_THONG_SANDAL = "\u{1FA74}";
    const CHARACTER_MAN_S_SHOE = "\u{1F45E}";
    const CHARACTER_RUNNING_SHOE = "\u{1F45F}";
    const CHARACTER_HIKING_BOOT = "\u{1F97E}";
    const CHARACTER_FLAT_SHOE = "\u{1F97F}";
    const CHARACTER_HIGH_HEELED_SHOE = "\u{1F460}";
    const CHARACTER_WOMAN_S_SANDAL = "\u{1F461}";
    const CHARACTER_BALLET_SHOES = "\u{1FA70}";
    const CHARACTER_WOMAN_S_BOOT = "\u{1F462}";
    const CHARACTER_CROWN = "\u{1F451}";
    const CHARACTER_WOMAN_S_HAT = "\u{1F452}";
    const CHARACTER_TOP_HAT = "\u{1F3A9}";
    const CHARACTER_GRADUATION_CAP = "\u{1F393}";
    const CHARACTER_BILLED_CAP = "\u{1F9E2}";
    const CHARACTER_MILITARY_HELMET = "\u{1FA96}";
    const CHARACTER_RESCUE_WORKER_S_HELMET = "\u{26D1}\u{FE0F}";
    const CHARACTER_PRAYER_BEADS = "\u{1F4FF}";
    const CHARACTER_LIPSTICK = "\u{1F484}";
    const CHARACTER_RING = "\u{1F48D}";
    const CHARACTER_GEM_STONE = "\u{1F48E}";
    // ##### Emoji subgroup: SOUND #####
    const CHARACTER_MUTED_SPEAKER = "\u{1F507}";
    const CHARACTER_SPEAKER_LOW_VOLUME = "\u{1F508}";
    const CHARACTER_SPEAKER_MEDIUM_VOLUME = "\u{1F509}";
    const CHARACTER_SPEAKER_HIGH_VOLUME = "\u{1F50A}";
    const CHARACTER_LOUDSPEAKER = "\u{1F4E2}";
    const CHARACTER_MEGAPHONE = "\u{1F4E3}";
    const CHARACTER_POSTAL_HORN = "\u{1F4EF}";
    const CHARACTER_BELL = "\u{1F514}";
    const CHARACTER_BELL_WITH_SLASH = "\u{1F515}";
    // ##### Emoji subgroup: MUSIC #####
    const CHARACTER_MUSICAL_SCORE = "\u{1F3BC}";
    const CHARACTER_MUSICAL_NOTE = "\u{1F3B5}";
    const CHARACTER_MUSICAL_NOTES = "\u{1F3B6}";
    const CHARACTER_STUDIO_MICROPHONE = "\u{1F399}\u{FE0F}";
    const CHARACTER_LEVEL_SLIDER = "\u{1F39A}\u{FE0F}";
    const CHARACTER_CONTROL_KNOBS = "\u{1F39B}\u{FE0F}";
    const CHARACTER_MICROPHONE = "\u{1F3A4}";
    const CHARACTER_HEADPHONE = "\u{1F3A7}";
    const CHARACTER_RADIO = "\u{1F4FB}";
    // ##### Emoji subgroup: MUSICAL-INSTRUMENT #####
    const CHARACTER_SAXOPHONE = "\u{1F3B7}";
    const CHARACTER_ACCORDION = "\u{1FA97}";
    const CHARACTER_GUITAR = "\u{1F3B8}";
    const CHARACTER_MUSICAL_KEYBOARD = "\u{1F3B9}";
    const CHARACTER_TRUMPET = "\u{1F3BA}";
    const CHARACTER_VIOLIN = "\u{1F3BB}";
    const CHARACTER_BANJO = "\u{1FA95}";
    const CHARACTER_DRUM = "\u{1F941}";
    const CHARACTER_LONG_DRUM = "\u{1FA98}";
    // ##### Emoji subgroup: PHONE #####
    const CHARACTER_MOBILE_PHONE = "\u{1F4F1}";
    const CHARACTER_MOBILE_PHONE_WITH_ARROW = "\u{1F4F2}";
    const CHARACTER_TELEPHONE = "\u{260E}\u{FE0F}";
    const CHARACTER_TELEPHONE_RECEIVER = "\u{1F4DE}";
    const CHARACTER_PAGER = "\u{1F4DF}";
    const CHARACTER_FAX_MACHINE = "\u{1F4E0}";
    // ##### Emoji subgroup: COMPUTER #####
    const CHARACTER_BATTERY = "\u{1F50B}";
    const CHARACTER_LOW_BATTERY = "\u{1FAAB}";
    const CHARACTER_ELECTRIC_PLUG = "\u{1F50C}";
    const CHARACTER_LAPTOP = "\u{1F4BB}";
    const CHARACTER_DESKTOP_COMPUTER = "\u{1F5A5}\u{FE0F}";
    const CHARACTER_PRINTER = "\u{1F5A8}\u{FE0F}";
    const CHARACTER_KEYBOARD = "\u{2328}\u{FE0F}";
    const CHARACTER_COMPUTER_MOUSE = "\u{1F5B1}\u{FE0F}";
    const CHARACTER_TRACKBALL = "\u{1F5B2}\u{FE0F}";
    const CHARACTER_COMPUTER_DISK = "\u{1F4BD}";
    const CHARACTER_FLOPPY_DISK = "\u{1F4BE}";
    const CHARACTER_OPTICAL_DISK = "\u{1F4BF}";
    const CHARACTER_DVD = "\u{1F4C0}";
    const CHARACTER_ABACUS = "\u{1F9EE}";
    // ##### Emoji subgroup: LIGHT & VIDEO #####
    const CHARACTER_MOVIE_CAMERA = "\u{1F3A5}";
    const CHARACTER_FILM_FRAMES = "\u{1F39E}\u{FE0F}";
    const CHARACTER_FILM_PROJECTOR = "\u{1F4FD}\u{FE0F}";
    const CHARACTER_CLAPPER_BOARD = "\u{1F3AC}";
    const CHARACTER_TELEVISION = "\u{1F4FA}";
    const CHARACTER_CAMERA = "\u{1F4F7}";
    const CHARACTER_CAMERA_WITH_FLASH = "\u{1F4F8}";
    const CHARACTER_VIDEO_CAMERA = "\u{1F4F9}";
    const CHARACTER_VIDEOCASSETTE = "\u{1F4FC}";
    const CHARACTER_MAGNIFYING_GLASS_TILTED_LEFT = "\u{1F50D}";
    const CHARACTER_MAGNIFYING_GLASS_TILTED_RIGHT = "\u{1F50E}";
    const CHARACTER_CANDLE = "\u{1F56F}\u{FE0F}";
    const CHARACTER_LIGHT_BULB = "\u{1F4A1}";
    const CHARACTER_FLASHLIGHT = "\u{1F526}";
    const CHARACTER_RED_PAPER_LANTERN = "\u{1F3EE}";
    const CHARACTER_DIYA_LAMP = "\u{1FA94}";
    // ##### Emoji subgroup: BOOK-PAPER #####
    const CHARACTER_NOTEBOOK_WITH_DECORATIVE_COVER = "\u{1F4D4}";
    const CHARACTER_CLOSED_BOOK = "\u{1F4D5}";
    const CHARACTER_OPEN_BOOK = "\u{1F4D6}";
    const CHARACTER_GREEN_BOOK = "\u{1F4D7}";
    const CHARACTER_BLUE_BOOK = "\u{1F4D8}";
    const CHARACTER_ORANGE_BOOK = "\u{1F4D9}";
    const CHARACTER_BOOKS = "\u{1F4DA}";
    const CHARACTER_NOTEBOOK = "\u{1F4D3}";
    const CHARACTER_LEDGER = "\u{1F4D2}";
    const CHARACTER_PAGE_WITH_CURL = "\u{1F4C3}";
    const CHARACTER_SCROLL = "\u{1F4DC}";
    const CHARACTER_PAGE_FACING_UP = "\u{1F4C4}";
    const CHARACTER_NEWSPAPER = "\u{1F4F0}";
    const CHARACTER_ROLLED_UP_NEWSPAPER = "\u{1F5DE}\u{FE0F}";
    const CHARACTER_BOOKMARK_TABS = "\u{1F4D1}";
    const CHARACTER_BOOKMARK = "\u{1F516}";
    const CHARACTER_LABEL = "\u{1F3F7}\u{FE0F}";
    // ##### Emoji subgroup: MONEY #####
    const CHARACTER_MONEY_BAG = "\u{1F4B0}";
    const CHARACTER_COIN = "\u{1FA99}";
    const CHARACTER_YEN_BANKNOTE = "\u{1F4B4}";
    const CHARACTER_DOLLAR_BANKNOTE = "\u{1F4B5}";
    const CHARACTER_EURO_BANKNOTE = "\u{1F4B6}";
    const CHARACTER_POUND_BANKNOTE = "\u{1F4B7}";
    const CHARACTER_MONEY_WITH_WINGS = "\u{1F4B8}";
    const CHARACTER_CREDIT_CARD = "\u{1F4B3}";
    const CHARACTER_RECEIPT = "\u{1F9FE}";
    const CHARACTER_CHART_INCREASING_WITH_YEN = "\u{1F4B9}";
    // ##### Emoji subgroup: MAIL #####
    const CHARACTER_ENVELOPE = "\u{2709}\u{FE0F}";
    const CHARACTER_E_MAIL = "\u{1F4E7}";
    const CHARACTER_INCOMING_ENVELOPE = "\u{1F4E8}";
    const CHARACTER_ENVELOPE_WITH_ARROW = "\u{1F4E9}";
    const CHARACTER_OUTBOX_TRAY = "\u{1F4E4}";
    const CHARACTER_INBOX_TRAY = "\u{1F4E5}";
    const CHARACTER_PACKAGE = "\u{1F4E6}";
    const CHARACTER_CLOSED_MAILBOX_WITH_RAISED_FLAG = "\u{1F4EB}";
    const CHARACTER_CLOSED_MAILBOX_WITH_LOWERED_FLAG = "\u{1F4EA}";
    const CHARACTER_OPEN_MAILBOX_WITH_RAISED_FLAG = "\u{1F4EC}";
    const CHARACTER_OPEN_MAILBOX_WITH_LOWERED_FLAG = "\u{1F4ED}";
    const CHARACTER_POSTBOX = "\u{1F4EE}";
    const CHARACTER_BALLOT_BOX_WITH_BALLOT = "\u{1F5F3}\u{FE0F}";
    // ##### Emoji subgroup: WRITING #####
    const CHARACTER_PENCIL = "\u{270F}\u{FE0F}";
    const CHARACTER_BLACK_NIB = "\u{2712}\u{FE0F}";
    const CHARACTER_FOUNTAIN_PEN = "\u{1F58B}\u{FE0F}";
    const CHARACTER_PEN = "\u{1F58A}\u{FE0F}";
    const CHARACTER_PAINTBRUSH = "\u{1F58C}\u{FE0F}";
    const CHARACTER_CRAYON = "\u{1F58D}\u{FE0F}";
    const CHARACTER_MEMO = "\u{1F4DD}";
    // ##### Emoji subgroup: OFFICE #####
    const CHARACTER_BRIEFCASE = "\u{1F4BC}";
    const CHARACTER_FILE_FOLDER = "\u{1F4C1}";
    const CHARACTER_OPEN_FILE_FOLDER = "\u{1F4C2}";
    const CHARACTER_CARD_INDEX_DIVIDERS = "\u{1F5C2}\u{FE0F}";
    const CHARACTER_CALENDAR = "\u{1F4C5}";
    const CHARACTER_TEAR_OFF_CALENDAR = "\u{1F4C6}";
    const CHARACTER_SPIRAL_NOTEPAD = "\u{1F5D2}\u{FE0F}";
    const CHARACTER_SPIRAL_CALENDAR = "\u{1F5D3}\u{FE0F}";
    const CHARACTER_CARD_INDEX = "\u{1F4C7}";
    const CHARACTER_CHART_INCREASING = "\u{1F4C8}";
    const CHARACTER_CHART_DECREASING = "\u{1F4C9}";
    const CHARACTER_BAR_CHART = "\u{1F4CA}";
    const CHARACTER_CLIPBOARD = "\u{1F4CB}";
    const CHARACTER_PUSHPIN = "\u{1F4CC}";
    const CHARACTER_ROUND_PUSHPIN = "\u{1F4CD}";
    const CHARACTER_PAPERCLIP = "\u{1F4CE}";
    const CHARACTER_LINKED_PAPERCLIPS = "\u{1F587}\u{FE0F}";
    const CHARACTER_STRAIGHT_RULER = "\u{1F4CF}";
    const CHARACTER_TRIANGULAR_RULER = "\u{1F4D0}";
    const CHARACTER_SCISSORS = "\u{2702}\u{FE0F}";
    const CHARACTER_CARD_FILE_BOX = "\u{1F5C3}\u{FE0F}";
    const CHARACTER_FILE_CABINET = "\u{1F5C4}\u{FE0F}";
    const CHARACTER_WASTEBASKET = "\u{1F5D1}\u{FE0F}";
    // ##### Emoji subgroup: LOCK #####
    const CHARACTER_LOCKED = "\u{1F512}";
    const CHARACTER_UNLOCKED = "\u{1F513}";
    const CHARACTER_LOCKED_WITH_PEN = "\u{1F50F}";
    const CHARACTER_LOCKED_WITH_KEY = "\u{1F510}";
    const CHARACTER_KEY = "\u{1F511}";
    const CHARACTER_OLD_KEY = "\u{1F5DD}\u{FE0F}";
    // ##### Emoji subgroup: TOOL #####
    const CHARACTER_HAMMER = "\u{1F528}";
    const CHARACTER_AXE = "\u{1FA93}";
    const CHARACTER_PICK = "\u{26CF}\u{FE0F}";
    const CHARACTER_HAMMER_AND_PICK = "\u{2692}\u{FE0F}";
    const CHARACTER_HAMMER_AND_WRENCH = "\u{1F6E0}\u{FE0F}";
    const CHARACTER_DAGGER = "\u{1F5E1}\u{FE0F}";
    const CHARACTER_CROSSED_SWORDS = "\u{2694}\u{FE0F}";
    const CHARACTER_WATER_PISTOL = "\u{1F52B}";
    const CHARACTER_BOOMERANG = "\u{1FA83}";
    const CHARACTER_BOW_AND_ARROW = "\u{1F3F9}";
    const CHARACTER_SHIELD = "\u{1F6E1}\u{FE0F}";
    const CHARACTER_CARPENTRY_SAW = "\u{1FA9A}";
    const CHARACTER_WRENCH = "\u{1F527}";
    const CHARACTER_SCREWDRIVER = "\u{1FA9B}";
    const CHARACTER_NUT_AND_BOLT = "\u{1F529}";
    const CHARACTER_GEAR = "\u{2699}\u{FE0F}";
    const CHARACTER_CLAMP = "\u{1F5DC}\u{FE0F}";
    const CHARACTER_BALANCE_SCALE = "\u{2696}\u{FE0F}";
    const CHARACTER_WHITE_CANE = "\u{1F9AF}";
    const CHARACTER_LINK = "\u{1F517}";
    const CHARACTER_CHAINS = "\u{26D3}\u{FE0F}";
    const CHARACTER_HOOK = "\u{1FA9D}";
    const CHARACTER_TOOLBOX = "\u{1F9F0}";
    const CHARACTER_MAGNET = "\u{1F9F2}";
    const CHARACTER_LADDER = "\u{1FA9C}";
    // ##### Emoji subgroup: SCIENCE #####
    const CHARACTER_ALEMBIC = "\u{2697}\u{FE0F}";
    const CHARACTER_TEST_TUBE = "\u{1F9EA}";
    const CHARACTER_PETRI_DISH = "\u{1F9EB}";
    const CHARACTER_DNA = "\u{1F9EC}";
    const CHARACTER_MICROSCOPE = "\u{1F52C}";
    const CHARACTER_TELESCOPE = "\u{1F52D}";
    const CHARACTER_SATELLITE_ANTENNA = "\u{1F4E1}";
    // ##### Emoji subgroup: MEDICAL #####
    const CHARACTER_SYRINGE = "\u{1F489}";
    const CHARACTER_DROP_OF_BLOOD = "\u{1FA78}";
    const CHARACTER_PILL = "\u{1F48A}";
    const CHARACTER_ADHESIVE_BANDAGE = "\u{1FA79}";
    const CHARACTER_CRUTCH = "\u{1FA7C}";
    const CHARACTER_STETHOSCOPE = "\u{1FA7A}";
    const CHARACTER_X_RAY = "\u{1FA7B}";
    // ##### Emoji subgroup: HOUSEHOLD #####
    const CHARACTER_DOOR = "\u{1F6AA}";
    const CHARACTER_ELEVATOR = "\u{1F6D7}";
    const CHARACTER_MIRROR = "\u{1FA9E}";
    const CHARACTER_WINDOW = "\u{1FA9F}";
    const CHARACTER_BED = "\u{1F6CF}\u{FE0F}";
    const CHARACTER_COUCH_AND_LAMP = "\u{1F6CB}\u{FE0F}";
    const CHARACTER_CHAIR = "\u{1FA91}";
    const CHARACTER_TOILET = "\u{1F6BD}";
    const CHARACTER_PLUNGER = "\u{1FAA0}";
    const CHARACTER_SHOWER = "\u{1F6BF}";
    const CHARACTER_BATHTUB = "\u{1F6C1}";
    const CHARACTER_MOUSE_TRAP = "\u{1FAA4}";
    const CHARACTER_RAZOR = "\u{1FA92}";
    const CHARACTER_LOTION_BOTTLE = "\u{1F9F4}";
    const CHARACTER_SAFETY_PIN = "\u{1F9F7}";
    const CHARACTER_BROOM = "\u{1F9F9}";
    const CHARACTER_BASKET = "\u{1F9FA}";
    const CHARACTER_ROLL_OF_PAPER = "\u{1F9FB}";
    const CHARACTER_BUCKET = "\u{1FAA3}";
    const CHARACTER_SOAP = "\u{1F9FC}";
    const CHARACTER_BUBBLES = "\u{1FAE7}";
    const CHARACTER_TOOTHBRUSH = "\u{1FAA5}";
    const CHARACTER_SPONGE = "\u{1F9FD}";
    const CHARACTER_FIRE_EXTINGUISHER = "\u{1F9EF}";
    const CHARACTER_SHOPPING_CART = "\u{1F6D2}";
    // ##### Emoji subgroup: OTHER-OBJECT #####
    const CHARACTER_CIGARETTE = "\u{1F6AC}";
    const CHARACTER_COFFIN = "\u{26B0}\u{FE0F}";
    const CHARACTER_HEADSTONE = "\u{1FAA6}";
    const CHARACTER_FUNERAL_URN = "\u{26B1}\u{FE0F}";
    const CHARACTER_MOAI = "\u{1F5FF}";
    const CHARACTER_PLACARD = "\u{1FAA7}";
    const CHARACTER_IDENTIFICATION_CARD = "\u{1FAAA}";
    // ##### Emoji group: SYMBOLS #####
    // ##### Emoji subgroup: TRANSPORT-SIGN #####
    const CHARACTER_ATM_SIGN = "\u{1F3E7}";
    const CHARACTER_LITTER_IN_BIN_SIGN = "\u{1F6AE}";
    const CHARACTER_POTABLE_WATER = "\u{1F6B0}";
    const CHARACTER_WHEELCHAIR_SYMBOL = "\u{267F}";
    const CHARACTER_MEN_S_ROOM = "\u{1F6B9}";
    const CHARACTER_WOMEN_S_ROOM = "\u{1F6BA}";
    const CHARACTER_RESTROOM = "\u{1F6BB}";
    const CHARACTER_BABY_SYMBOL = "\u{1F6BC}";
    const CHARACTER_WATER_CLOSET = "\u{1F6BE}";
    const CHARACTER_PASSPORT_CONTROL = "\u{1F6C2}";
    const CHARACTER_CUSTOMS = "\u{1F6C3}";
    const CHARACTER_BAGGAGE_CLAIM = "\u{1F6C4}";
    const CHARACTER_LEFT_LUGGAGE = "\u{1F6C5}";
    // ##### Emoji subgroup: WARNING #####
    const CHARACTER_WARNING = "\u{26A0}\u{FE0F}";
    const CHARACTER_CHILDREN_CROSSING = "\u{1F6B8}";
    const CHARACTER_NO_ENTRY = "\u{26D4}";
    const CHARACTER_PROHIBITED = "\u{1F6AB}";
    const CHARACTER_NO_BICYCLES = "\u{1F6B3}";
    const CHARACTER_NO_SMOKING = "\u{1F6AD}";
    const CHARACTER_NO_LITTERING = "\u{1F6AF}";
    const CHARACTER_NON_POTABLE_WATER = "\u{1F6B1}";
    const CHARACTER_NO_PEDESTRIANS = "\u{1F6B7}";
    const CHARACTER_NO_MOBILE_PHONES = "\u{1F4F5}";
    const CHARACTER_NO_ONE_UNDER_EIGHTEEN = "\u{1F51E}";
    const CHARACTER_RADIOACTIVE = "\u{2622}\u{FE0F}";
    const CHARACTER_BIOHAZARD = "\u{2623}\u{FE0F}";
    // ##### Emoji subgroup: ARROW #####
    const CHARACTER_UP_ARROW = "\u{2B06}\u{FE0F}";
    const CHARACTER_UP_RIGHT_ARROW = "\u{2197}\u{FE0F}";
    const CHARACTER_RIGHT_ARROW = "\u{27A1}\u{FE0F}";
    const CHARACTER_DOWN_RIGHT_ARROW = "\u{2198}\u{FE0F}";
    const CHARACTER_DOWN_ARROW = "\u{2B07}\u{FE0F}";
    const CHARACTER_DOWN_LEFT_ARROW = "\u{2199}\u{FE0F}";
    const CHARACTER_LEFT_ARROW = "\u{2B05}\u{FE0F}";
    const CHARACTER_UP_LEFT_ARROW = "\u{2196}\u{FE0F}";
    const CHARACTER_UP_DOWN_ARROW = "\u{2195}\u{FE0F}";
    const CHARACTER_LEFT_RIGHT_ARROW = "\u{2194}\u{FE0F}";
    const CHARACTER_RIGHT_ARROW_CURVING_LEFT = "\u{21A9}\u{FE0F}";
    const CHARACTER_LEFT_ARROW_CURVING_RIGHT = "\u{21AA}\u{FE0F}";
    const CHARACTER_RIGHT_ARROW_CURVING_UP = "\u{2934}\u{FE0F}";
    const CHARACTER_RIGHT_ARROW_CURVING_DOWN = "\u{2935}\u{FE0F}";
    const CHARACTER_CLOCKWISE_VERTICAL_ARROWS = "\u{1F503}";
    const CHARACTER_COUNTERCLOCKWISE_ARROWS_BUTTON = "\u{1F504}";
    const CHARACTER_BACK_ARROW = "\u{1F519}";
    const CHARACTER_END_ARROW = "\u{1F51A}";
    const CHARACTER_ON_ARROW = "\u{1F51B}";
    const CHARACTER_SOON_ARROW = "\u{1F51C}";
    const CHARACTER_TOP_ARROW = "\u{1F51D}";
    // ##### Emoji subgroup: RELIGION #####
    const CHARACTER_PLACE_OF_WORSHIP = "\u{1F6D0}";
    const CHARACTER_ATOM_SYMBOL = "\u{269B}\u{FE0F}";
    const CHARACTER_OM = "\u{1F549}\u{FE0F}";
    const CHARACTER_STAR_OF_DAVID = "\u{2721}\u{FE0F}";
    const CHARACTER_WHEEL_OF_DHARMA = "\u{2638}\u{FE0F}";
    const CHARACTER_YIN_YANG = "\u{262F}\u{FE0F}";
    const CHARACTER_LATIN_CROSS = "\u{271D}\u{FE0F}";
    const CHARACTER_ORTHODOX_CROSS = "\u{2626}\u{FE0F}";
    const CHARACTER_STAR_AND_CRESCENT = "\u{262A}\u{FE0F}";
    const CHARACTER_PEACE_SYMBOL = "\u{262E}\u{FE0F}";
    const CHARACTER_MENORAH = "\u{1F54E}";
    const CHARACTER_DOTTED_SIX_POINTED_STAR = "\u{1F52F}";
    // ##### Emoji subgroup: ZODIAC #####
    const CHARACTER_ARIES = "\u{2648}";
    const CHARACTER_TAURUS = "\u{2649}";
    const CHARACTER_GEMINI = "\u{264A}";
    const CHARACTER_CANCER = "\u{264B}";
    const CHARACTER_LEO = "\u{264C}";
    const CHARACTER_VIRGO = "\u{264D}";
    const CHARACTER_LIBRA = "\u{264E}";
    const CHARACTER_SCORPIO = "\u{264F}";
    const CHARACTER_SAGITTARIUS = "\u{2650}";
    const CHARACTER_CAPRICORN = "\u{2651}";
    const CHARACTER_AQUARIUS = "\u{2652}";
    const CHARACTER_PISCES = "\u{2653}";
    const CHARACTER_OPHIUCHUS = "\u{26CE}";
    // ##### Emoji subgroup: AV-SYMBOL #####
    const CHARACTER_SHUFFLE_TRACKS_BUTTON = "\u{1F500}";
    const CHARACTER_REPEAT_BUTTON = "\u{1F501}";
    const CHARACTER_REPEAT_SINGLE_BUTTON = "\u{1F502}";
    const CHARACTER_PLAY_BUTTON = "\u{25B6}\u{FE0F}";
    const CHARACTER_FAST_FORWARD_BUTTON = "\u{23E9}";
    const CHARACTER_NEXT_TRACK_BUTTON = "\u{23ED}\u{FE0F}";
    const CHARACTER_PLAY_OR_PAUSE_BUTTON = "\u{23EF}\u{FE0F}";
    const CHARACTER_REVERSE_BUTTON = "\u{25C0}\u{FE0F}";
    const CHARACTER_FAST_REVERSE_BUTTON = "\u{23EA}";
    const CHARACTER_LAST_TRACK_BUTTON = "\u{23EE}\u{FE0F}";
    const CHARACTER_UPWARDS_BUTTON = "\u{1F53C}";
    const CHARACTER_FAST_UP_BUTTON = "\u{23EB}";
    const CHARACTER_DOWNWARDS_BUTTON = "\u{1F53D}";
    const CHARACTER_FAST_DOWN_BUTTON = "\u{23EC}";
    const CHARACTER_PAUSE_BUTTON = "\u{23F8}\u{FE0F}";
    const CHARACTER_STOP_BUTTON = "\u{23F9}\u{FE0F}";
    const CHARACTER_RECORD_BUTTON = "\u{23FA}\u{FE0F}";
    const CHARACTER_EJECT_BUTTON = "\u{23CF}\u{FE0F}";
    const CHARACTER_CINEMA = "\u{1F3A6}";
    const CHARACTER_DIM_BUTTON = "\u{1F505}";
    const CHARACTER_BRIGHT_BUTTON = "\u{1F506}";
    const CHARACTER_ANTENNA_BARS = "\u{1F4F6}";
    const CHARACTER_VIBRATION_MODE = "\u{1F4F3}";
    const CHARACTER_MOBILE_PHONE_OFF = "\u{1F4F4}";
    // ##### Emoji subgroup: GENDER #####
    const CHARACTER_FEMALE_SIGN = "\u{2640}\u{FE0F}";
    const CHARACTER_MALE_SIGN = "\u{2642}\u{FE0F}";
    const CHARACTER_TRANSGENDER_SYMBOL = "\u{26A7}\u{FE0F}";
    // ##### Emoji subgroup: MATH #####
    const CHARACTER_MULTIPLY = "\u{2716}\u{FE0F}";
    const CHARACTER_PLUS = "\u{2795}";
    const CHARACTER_MINUS = "\u{2796}";
    const CHARACTER_DIVIDE = "\u{2797}";
    const CHARACTER_HEAVY_EQUALS_SIGN = "\u{1F7F0}";
    const CHARACTER_INFINITY = "\u{267E}\u{FE0F}";
    // ##### Emoji subgroup: PUNCTUATION #####
    const CHARACTER_DOUBLE_EXCLAMATION_MARK = "\u{203C}\u{FE0F}";
    const CHARACTER_EXCLAMATION_QUESTION_MARK = "\u{2049}\u{FE0F}";
    const CHARACTER_RED_QUESTION_MARK = "\u{2753}";
    const CHARACTER_WHITE_QUESTION_MARK = "\u{2754}";
    const CHARACTER_WHITE_EXCLAMATION_MARK = "\u{2755}";
    const CHARACTER_RED_EXCLAMATION_MARK = "\u{2757}";
    const CHARACTER_WAVY_DASH = "\u{3030}\u{FE0F}";
    // ##### Emoji subgroup: CURRENCY #####
    const CHARACTER_CURRENCY_EXCHANGE = "\u{1F4B1}";
    const CHARACTER_HEAVY_DOLLAR_SIGN = "\u{1F4B2}";
    // ##### Emoji subgroup: OTHER-SYMBOL #####
    const CHARACTER_MEDICAL_SYMBOL = "\u{2695}\u{FE0F}";
    const CHARACTER_RECYCLING_SYMBOL = "\u{267B}\u{FE0F}";
    const CHARACTER_FLEUR_DE_LIS = "\u{269C}\u{FE0F}";
    const CHARACTER_TRIDENT_EMBLEM = "\u{1F531}";
    const CHARACTER_NAME_BADGE = "\u{1F4DB}";
    const CHARACTER_JAPANESE_SYMBOL_FOR_BEGINNER = "\u{1F530}";
    const CHARACTER_HOLLOW_RED_CIRCLE = "\u{2B55}";
    const CHARACTER_CHECK_MARK_BUTTON = "\u{2705}";
    const CHARACTER_CHECK_BOX_WITH_CHECK = "\u{2611}\u{FE0F}";
    const CHARACTER_CHECK_MARK = "\u{2714}\u{FE0F}";
    const CHARACTER_CROSS_MARK = "\u{274C}";
    const CHARACTER_CROSS_MARK_BUTTON = "\u{274E}";
    const CHARACTER_CURLY_LOOP = "\u{27B0}";
    const CHARACTER_DOUBLE_CURLY_LOOP = "\u{27BF}";
    const CHARACTER_PART_ALTERNATION_MARK = "\u{303D}\u{FE0F}";
    const CHARACTER_EIGHT_SPOKED_ASTERISK = "\u{2733}\u{FE0F}";
    const CHARACTER_EIGHT_POINTED_STAR = "\u{2734}\u{FE0F}";
    const CHARACTER_SPARKLE = "\u{2747}\u{FE0F}";
    const CHARACTER_COPYRIGHT = "\u{00A9}\u{FE0F}";
    const CHARACTER_REGISTERED = "\u{00AE}\u{FE0F}";
    const CHARACTER_TRADE_MARK = "\u{2122}\u{FE0F}";
    // ##### Emoji subgroup: KEYCAP #####
    const CHARACTER_KEYCAP_HASH = "\u{0023}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_ASTERISK = "\u{002A}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_0 = "\u{0030}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_1 = "\u{0031}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_2 = "\u{0032}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_3 = "\u{0033}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_4 = "\u{0034}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_5 = "\u{0035}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_6 = "\u{0036}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_7 = "\u{0037}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_8 = "\u{0038}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_9 = "\u{0039}\u{FE0F}\u{20E3}";
    const CHARACTER_KEYCAP_10 = "\u{1F51F}";
    // ##### Emoji subgroup: ALPHANUM #####
    const CHARACTER_INPUT_LATIN_UPPERCASE = "\u{1F520}";
    const CHARACTER_INPUT_LATIN_LOWERCASE = "\u{1F521}";
    const CHARACTER_INPUT_NUMBERS = "\u{1F522}";
    const CHARACTER_INPUT_SYMBOLS = "\u{1F523}";
    const CHARACTER_INPUT_LATIN_LETTERS = "\u{1F524}";
    const CHARACTER_A_BUTTON_BLOOD_TYPE = "\u{1F170}\u{FE0F}";
    const CHARACTER_AB_BUTTON_BLOOD_TYPE = "\u{1F18E}";
    const CHARACTER_B_BUTTON_BLOOD_TYPE = "\u{1F171}\u{FE0F}";
    const CHARACTER_CL_BUTTON = "\u{1F191}";
    const CHARACTER_COOL_BUTTON = "\u{1F192}";
    const CHARACTER_FREE_BUTTON = "\u{1F193}";
    const CHARACTER_INFORMATION = "\u{2139}\u{FE0F}";
    const CHARACTER_ID_BUTTON = "\u{1F194}";
    const CHARACTER_CIRCLED_M = "\u{24C2}\u{FE0F}";
    const CHARACTER_NEW_BUTTON = "\u{1F195}";
    const CHARACTER_NG_BUTTON = "\u{1F196}";
    const CHARACTER_O_BUTTON_BLOOD_TYPE = "\u{1F17E}\u{FE0F}";
    const CHARACTER_OK_BUTTON = "\u{1F197}";
    const CHARACTER_P_BUTTON = "\u{1F17F}\u{FE0F}";
    const CHARACTER_SOS_BUTTON = "\u{1F198}";
    const CHARACTER_UP_BUTTON = "\u{1F199}";
    const CHARACTER_VS_BUTTON = "\u{1F19A}";
    const CHARACTER_JAPANESE_HERE_BUTTON = "\u{1F201}";
    const CHARACTER_JAPANESE_SERVICE_CHARGE_BUTTON = "\u{1F202}\u{FE0F}";
    const CHARACTER_JAPANESE_MONTHLY_AMOUNT_BUTTON = "\u{1F237}\u{FE0F}";
    const CHARACTER_JAPANESE_NOT_FREE_OF_CHARGE_BUTTON = "\u{1F236}";
    const CHARACTER_JAPANESE_RESERVED_BUTTON = "\u{1F22F}";
    const CHARACTER_JAPANESE_BARGAIN_BUTTON = "\u{1F250}";
    const CHARACTER_JAPANESE_DISCOUNT_BUTTON = "\u{1F239}";
    const CHARACTER_JAPANESE_FREE_OF_CHARGE_BUTTON = "\u{1F21A}";
    const CHARACTER_JAPANESE_PROHIBITED_BUTTON = "\u{1F232}";
    const CHARACTER_JAPANESE_ACCEPTABLE_BUTTON = "\u{1F251}";
    const CHARACTER_JAPANESE_APPLICATION_BUTTON = "\u{1F238}";
    const CHARACTER_JAPANESE_PASSING_GRADE_BUTTON = "\u{1F234}";
    const CHARACTER_JAPANESE_VACANCY_BUTTON = "\u{1F233}";
    const CHARACTER_JAPANESE_CONGRATULATIONS_BUTTON = "\u{3297}\u{FE0F}";
    const CHARACTER_JAPANESE_SECRET_BUTTON = "\u{3299}\u{FE0F}";
    const CHARACTER_JAPANESE_OPEN_FOR_BUSINESS_BUTTON = "\u{1F23A}";
    const CHARACTER_JAPANESE_NO_VACANCY_BUTTON = "\u{1F235}";
    // ##### Emoji subgroup: GEOMETRIC #####
    const CHARACTER_RED_CIRCLE = "\u{1F534}";
    const CHARACTER_ORANGE_CIRCLE = "\u{1F7E0}";
    const CHARACTER_YELLOW_CIRCLE = "\u{1F7E1}";
    const CHARACTER_GREEN_CIRCLE = "\u{1F7E2}";
    const CHARACTER_BLUE_CIRCLE = "\u{1F535}";
    const CHARACTER_PURPLE_CIRCLE = "\u{1F7E3}";
    const CHARACTER_BROWN_CIRCLE = "\u{1F7E4}";
    const CHARACTER_BLACK_CIRCLE = "\u{26AB}";
    const CHARACTER_WHITE_CIRCLE = "\u{26AA}";
    const CHARACTER_RED_SQUARE = "\u{1F7E5}";
    const CHARACTER_ORANGE_SQUARE = "\u{1F7E7}";
    const CHARACTER_YELLOW_SQUARE = "\u{1F7E8}";
    const CHARACTER_GREEN_SQUARE = "\u{1F7E9}";
    const CHARACTER_BLUE_SQUARE = "\u{1F7E6}";
    const CHARACTER_PURPLE_SQUARE = "\u{1F7EA}";
    const CHARACTER_BROWN_SQUARE = "\u{1F7EB}";
    const CHARACTER_BLACK_LARGE_SQUARE = "\u{2B1B}";
    const CHARACTER_WHITE_LARGE_SQUARE = "\u{2B1C}";
    const CHARACTER_BLACK_MEDIUM_SQUARE = "\u{25FC}\u{FE0F}";
    const CHARACTER_WHITE_MEDIUM_SQUARE = "\u{25FB}\u{FE0F}";
    const CHARACTER_BLACK_MEDIUM_SMALL_SQUARE = "\u{25FE}";
    const CHARACTER_WHITE_MEDIUM_SMALL_SQUARE = "\u{25FD}";
    const CHARACTER_BLACK_SMALL_SQUARE = "\u{25AA}\u{FE0F}";
    const CHARACTER_WHITE_SMALL_SQUARE = "\u{25AB}\u{FE0F}";
    const CHARACTER_LARGE_ORANGE_DIAMOND = "\u{1F536}";
    const CHARACTER_LARGE_BLUE_DIAMOND = "\u{1F537}";
    const CHARACTER_SMALL_ORANGE_DIAMOND = "\u{1F538}";
    const CHARACTER_SMALL_BLUE_DIAMOND = "\u{1F539}";
    const CHARACTER_RED_TRIANGLE_POINTED_UP = "\u{1F53A}";
    const CHARACTER_RED_TRIANGLE_POINTED_DOWN = "\u{1F53B}";
    const CHARACTER_DIAMOND_WITH_A_DOT = "\u{1F4A0}";
    const CHARACTER_RADIO_BUTTON = "\u{1F518}";
    const CHARACTER_WHITE_SQUARE_BUTTON = "\u{1F533}";
    const CHARACTER_BLACK_SQUARE_BUTTON = "\u{1F532}";
    // ##### Emoji group: FLAGS #####
    // ##### Emoji subgroup: FLAG #####
    const CHARACTER_CHEQUERED_FLAG = "\u{1F3C1}";
    const CHARACTER_TRIANGULAR_FLAG = "\u{1F6A9}";
    const CHARACTER_CROSSED_FLAGS = "\u{1F38C}";
    const CHARACTER_BLACK_FLAG = "\u{1F3F4}";
    const CHARACTER_WHITE_FLAG = "\u{1F3F3}\u{FE0F}";
    const CHARACTER_RAINBOW_FLAG = "\u{1F3F3}\u{FE0F}\u{200D}\u{1F308}";
    const CHARACTER_TRANSGENDER_FLAG = "\u{1F3F3}\u{FE0F}\u{200D}\u{26A7}\u{FE0F}";
    const CHARACTER_PIRATE_FLAG = "\u{1F3F4}\u{200D}\u{2620}\u{FE0F}";
    // ##### Emoji subgroup: COUNTRY-FLAG #####
    const CHARACTER_FLAGS_FOR_FLAG_ASCENSION_ISLAND = "\u{1F1E6}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_ANDORRA = "\u{1F1E6}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_UNITED_ARAB_EMIRATES = "\u{1F1E6}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_AFGHANISTAN = "\u{1F1E6}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_ANTIGUA_AND_BARBUDA = "\u{1F1E6}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_ANGUILLA = "\u{1F1E6}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_ALBANIA = "\u{1F1E6}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_ARMENIA = "\u{1F1E6}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_ANGOLA = "\u{1F1E6}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_ANTARCTICA = "\u{1F1E6}\u{1F1F6}";
    const CHARACTER_FLAGS_FOR_FLAG_ARGENTINA = "\u{1F1E6}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_AMERICAN_SAMOA = "\u{1F1E6}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_AUSTRIA = "\u{1F1E6}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_AUSTRALIA = "\u{1F1E6}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_ARUBA = "\u{1F1E6}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_ALAND_ISLANDS = "\u{1F1E6}\u{1F1FD}";
    const CHARACTER_FLAGS_FOR_FLAG_AZERBAIJAN = "\u{1F1E6}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_BOSNIA_AND_HERZEGOVINA = "\u{1F1E7}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_BARBADOS = "\u{1F1E7}\u{1F1E7}";
    const CHARACTER_FLAGS_FOR_FLAG_BANGLADESH = "\u{1F1E7}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_BELGIUM = "\u{1F1E7}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_BURKINA_FASO = "\u{1F1E7}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_BULGARIA = "\u{1F1E7}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_BAHRAIN = "\u{1F1E7}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_BURUNDI = "\u{1F1E7}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_BENIN = "\u{1F1E7}\u{1F1EF}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_BARTHELEMY = "\u{1F1E7}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_BERMUDA = "\u{1F1E7}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_BRUNEI = "\u{1F1E7}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_BOLIVIA = "\u{1F1E7}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_CARIBBEAN_NETHERLANDS = "\u{1F1E7}\u{1F1F6}";
    const CHARACTER_FLAGS_FOR_FLAG_BRAZIL = "\u{1F1E7}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_BAHAMAS = "\u{1F1E7}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_BHUTAN = "\u{1F1E7}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_BOUVET_ISLAND = "\u{1F1E7}\u{1F1FB}";
    const CHARACTER_FLAGS_FOR_FLAG_BOTSWANA = "\u{1F1E7}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_BELARUS = "\u{1F1E7}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_BELIZE = "\u{1F1E7}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_CANADA = "\u{1F1E8}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_COCOS_KEELING_ISLANDS = "\u{1F1E8}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_CONGO_KINSHASA = "\u{1F1E8}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_CENTRAL_AFRICAN_REPUBLIC = "\u{1F1E8}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_CONGO_BRAZZAVILLE = "\u{1F1E8}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_SWITZERLAND = "\u{1F1E8}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_COTE_D_IVOIRE = "\u{1F1E8}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_COOK_ISLANDS = "\u{1F1E8}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_CHILE = "\u{1F1E8}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_CAMEROON = "\u{1F1E8}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_CHINA = "\u{1F1E8}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_COLOMBIA = "\u{1F1E8}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_CLIPPERTON_ISLAND = "\u{1F1E8}\u{1F1F5}";
    const CHARACTER_FLAGS_FOR_FLAG_COSTA_RICA = "\u{1F1E8}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_CUBA = "\u{1F1E8}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_CAPE_VERDE = "\u{1F1E8}\u{1F1FB}";
    const CHARACTER_FLAGS_FOR_FLAG_CURACAO = "\u{1F1E8}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_CHRISTMAS_ISLAND = "\u{1F1E8}\u{1F1FD}";
    const CHARACTER_FLAGS_FOR_FLAG_CYPRUS = "\u{1F1E8}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_CZECHIA = "\u{1F1E8}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_GERMANY = "\u{1F1E9}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_DIEGO_GARCIA = "\u{1F1E9}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_DJIBOUTI = "\u{1F1E9}\u{1F1EF}";
    const CHARACTER_FLAGS_FOR_FLAG_DENMARK = "\u{1F1E9}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_DOMINICA = "\u{1F1E9}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_DOMINICAN_REPUBLIC = "\u{1F1E9}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_ALGERIA = "\u{1F1E9}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_CEUTA_AND_MELILLA = "\u{1F1EA}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_ECUADOR = "\u{1F1EA}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_ESTONIA = "\u{1F1EA}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_EGYPT = "\u{1F1EA}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_WESTERN_SAHARA = "\u{1F1EA}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_ERITREA = "\u{1F1EA}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_SPAIN = "\u{1F1EA}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_ETHIOPIA = "\u{1F1EA}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_EUROPEAN_UNION = "\u{1F1EA}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_FINLAND = "\u{1F1EB}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_FIJI = "\u{1F1EB}\u{1F1EF}";
    const CHARACTER_FLAGS_FOR_FLAG_FALKLAND_ISLANDS = "\u{1F1EB}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_MICRONESIA = "\u{1F1EB}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_FAROE_ISLANDS = "\u{1F1EB}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_FRANCE = "\u{1F1EB}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_GABON = "\u{1F1EC}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_UNITED_KINGDOM = "\u{1F1EC}\u{1F1E7}";
    const CHARACTER_FLAGS_FOR_FLAG_GRENADA = "\u{1F1EC}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_GEORGIA = "\u{1F1EC}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_FRENCH_GUIANA = "\u{1F1EC}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_GUERNSEY = "\u{1F1EC}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_GHANA = "\u{1F1EC}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_GIBRALTAR = "\u{1F1EC}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_GREENLAND = "\u{1F1EC}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_GAMBIA = "\u{1F1EC}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_GUINEA = "\u{1F1EC}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_GUADELOUPE = "\u{1F1EC}\u{1F1F5}";
    const CHARACTER_FLAGS_FOR_FLAG_EQUATORIAL_GUINEA = "\u{1F1EC}\u{1F1F6}";
    const CHARACTER_FLAGS_FOR_FLAG_GREECE = "\u{1F1EC}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS = "\u{1F1EC}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_GUATEMALA = "\u{1F1EC}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_GUAM = "\u{1F1EC}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_GUINEA_BISSAU = "\u{1F1EC}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_GUYANA = "\u{1F1EC}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_HONG_KONG_SAR_CHINA = "\u{1F1ED}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_HEARD_AND_MCDONALD_ISLANDS = "\u{1F1ED}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_HONDURAS = "\u{1F1ED}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_CROATIA = "\u{1F1ED}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_HAITI = "\u{1F1ED}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_HUNGARY = "\u{1F1ED}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_CANARY_ISLANDS = "\u{1F1EE}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_INDONESIA = "\u{1F1EE}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_IRELAND = "\u{1F1EE}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_ISRAEL = "\u{1F1EE}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_ISLE_OF_MAN = "\u{1F1EE}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_INDIA = "\u{1F1EE}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_BRITISH_INDIAN_OCEAN_TERRITORY = "\u{1F1EE}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_IRAQ = "\u{1F1EE}\u{1F1F6}";
    const CHARACTER_FLAGS_FOR_FLAG_IRAN = "\u{1F1EE}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_ICELAND = "\u{1F1EE}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_ITALY = "\u{1F1EE}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_JERSEY = "\u{1F1EF}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_JAMAICA = "\u{1F1EF}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_JORDAN = "\u{1F1EF}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_JAPAN = "\u{1F1EF}\u{1F1F5}";
    const CHARACTER_FLAGS_FOR_FLAG_KENYA = "\u{1F1F0}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_KYRGYZSTAN = "\u{1F1F0}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_CAMBODIA = "\u{1F1F0}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_KIRIBATI = "\u{1F1F0}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_COMOROS = "\u{1F1F0}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_KITTS_AND_NEVIS = "\u{1F1F0}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_NORTH_KOREA = "\u{1F1F0}\u{1F1F5}";
    const CHARACTER_FLAGS_FOR_FLAG_SOUTH_KOREA = "\u{1F1F0}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_KUWAIT = "\u{1F1F0}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_CAYMAN_ISLANDS = "\u{1F1F0}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_KAZAKHSTAN = "\u{1F1F0}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_LAOS = "\u{1F1F1}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_LEBANON = "\u{1F1F1}\u{1F1E7}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_LUCIA = "\u{1F1F1}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_LIECHTENSTEIN = "\u{1F1F1}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_SRI_LANKA = "\u{1F1F1}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_LIBERIA = "\u{1F1F1}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_LESOTHO = "\u{1F1F1}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_LITHUANIA = "\u{1F1F1}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_LUXEMBOURG = "\u{1F1F1}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_LATVIA = "\u{1F1F1}\u{1F1FB}";
    const CHARACTER_FLAGS_FOR_FLAG_LIBYA = "\u{1F1F1}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_MOROCCO = "\u{1F1F2}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_MONACO = "\u{1F1F2}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_MOLDOVA = "\u{1F1F2}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_MONTENEGRO = "\u{1F1F2}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_MARTIN = "\u{1F1F2}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_MADAGASCAR = "\u{1F1F2}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_MARSHALL_ISLANDS = "\u{1F1F2}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_NORTH_MACEDONIA = "\u{1F1F2}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_MALI = "\u{1F1F2}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_MYANMAR_BURMA = "\u{1F1F2}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_MONGOLIA = "\u{1F1F2}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_MACAO_SAR_CHINA = "\u{1F1F2}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_NORTHERN_MARIANA_ISLANDS = "\u{1F1F2}\u{1F1F5}";
    const CHARACTER_FLAGS_FOR_FLAG_MARTINIQUE = "\u{1F1F2}\u{1F1F6}";
    const CHARACTER_FLAGS_FOR_FLAG_MAURITANIA = "\u{1F1F2}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_MONTSERRAT = "\u{1F1F2}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_MALTA = "\u{1F1F2}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_MAURITIUS = "\u{1F1F2}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_MALDIVES = "\u{1F1F2}\u{1F1FB}";
    const CHARACTER_FLAGS_FOR_FLAG_MALAWI = "\u{1F1F2}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_MEXICO = "\u{1F1F2}\u{1F1FD}";
    const CHARACTER_FLAGS_FOR_FLAG_MALAYSIA = "\u{1F1F2}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_MOZAMBIQUE = "\u{1F1F2}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_NAMIBIA = "\u{1F1F3}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_NEW_CALEDONIA = "\u{1F1F3}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_NIGER = "\u{1F1F3}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_NORFOLK_ISLAND = "\u{1F1F3}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_NIGERIA = "\u{1F1F3}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_NICARAGUA = "\u{1F1F3}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_NETHERLANDS = "\u{1F1F3}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_NORWAY = "\u{1F1F3}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_NEPAL = "\u{1F1F3}\u{1F1F5}";
    const CHARACTER_FLAGS_FOR_FLAG_NAURU = "\u{1F1F3}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_NIUE = "\u{1F1F3}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_NEW_ZEALAND = "\u{1F1F3}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_OMAN = "\u{1F1F4}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_PANAMA = "\u{1F1F5}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_PERU = "\u{1F1F5}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_FRENCH_POLYNESIA = "\u{1F1F5}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_PAPUA_NEW_GUINEA = "\u{1F1F5}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_PHILIPPINES = "\u{1F1F5}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_PAKISTAN = "\u{1F1F5}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_POLAND = "\u{1F1F5}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_PIERRE_AND_MIQUELON = "\u{1F1F5}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_PITCAIRN_ISLANDS = "\u{1F1F5}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_PUERTO_RICO = "\u{1F1F5}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_PALESTINIAN_TERRITORIES = "\u{1F1F5}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_PORTUGAL = "\u{1F1F5}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_PALAU = "\u{1F1F5}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_PARAGUAY = "\u{1F1F5}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_QATAR = "\u{1F1F6}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_REUNION = "\u{1F1F7}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_ROMANIA = "\u{1F1F7}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_SERBIA = "\u{1F1F7}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_RUSSIA = "\u{1F1F7}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_RWANDA = "\u{1F1F7}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_SAUDI_ARABIA = "\u{1F1F8}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_SOLOMON_ISLANDS = "\u{1F1F8}\u{1F1E7}";
    const CHARACTER_FLAGS_FOR_FLAG_SEYCHELLES = "\u{1F1F8}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_SUDAN = "\u{1F1F8}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_SWEDEN = "\u{1F1F8}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_SINGAPORE = "\u{1F1F8}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_HELENA = "\u{1F1F8}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_SLOVENIA = "\u{1F1F8}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_SVALBARD_AND_JAN_MAYEN = "\u{1F1F8}\u{1F1EF}";
    const CHARACTER_FLAGS_FOR_FLAG_SLOVAKIA = "\u{1F1F8}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_SIERRA_LEONE = "\u{1F1F8}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_SAN_MARINO = "\u{1F1F8}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_SENEGAL = "\u{1F1F8}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_SOMALIA = "\u{1F1F8}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_SURINAME = "\u{1F1F8}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_SOUTH_SUDAN = "\u{1F1F8}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_SAO_TOME_AND_PRINCIPE = "\u{1F1F8}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_EL_SALVADOR = "\u{1F1F8}\u{1F1FB}";
    const CHARACTER_FLAGS_FOR_FLAG_SINT_MAARTEN = "\u{1F1F8}\u{1F1FD}";
    const CHARACTER_FLAGS_FOR_FLAG_SYRIA = "\u{1F1F8}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_ESWATINI = "\u{1F1F8}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_TRISTAN_DA_CUNHA = "\u{1F1F9}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_TURKS_AND_CAICOS_ISLANDS = "\u{1F1F9}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_CHAD = "\u{1F1F9}\u{1F1E9}";
    const CHARACTER_FLAGS_FOR_FLAG_FRENCH_SOUTHERN_TERRITORIES = "\u{1F1F9}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_TOGO = "\u{1F1F9}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_THAILAND = "\u{1F1F9}\u{1F1ED}";
    const CHARACTER_FLAGS_FOR_FLAG_TAJIKISTAN = "\u{1F1F9}\u{1F1EF}";
    const CHARACTER_FLAGS_FOR_FLAG_TOKELAU = "\u{1F1F9}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_TIMOR_LESTE = "\u{1F1F9}\u{1F1F1}";
    const CHARACTER_FLAGS_FOR_FLAG_TURKMENISTAN = "\u{1F1F9}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_TUNISIA = "\u{1F1F9}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_TONGA = "\u{1F1F9}\u{1F1F4}";
    const CHARACTER_FLAGS_FOR_FLAG_TURKEY = "\u{1F1F9}\u{1F1F7}";
    const CHARACTER_FLAGS_FOR_FLAG_TRINIDAD_AND_TOBAGO = "\u{1F1F9}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_TUVALU = "\u{1F1F9}\u{1F1FB}";
    const CHARACTER_FLAGS_FOR_FLAG_TAIWAN = "\u{1F1F9}\u{1F1FC}";
    const CHARACTER_FLAGS_FOR_FLAG_TANZANIA = "\u{1F1F9}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_UKRAINE = "\u{1F1FA}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_UGANDA = "\u{1F1FA}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_US_OUTLYING_ISLANDS = "\u{1F1FA}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_UNITED_NATIONS = "\u{1F1FA}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_UNITED_STATES = "\u{1F1FA}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_URUGUAY = "\u{1F1FA}\u{1F1FE}";
    const CHARACTER_FLAGS_FOR_FLAG_UZBEKISTAN = "\u{1F1FA}\u{1F1FF}";
    const CHARACTER_FLAGS_FOR_FLAG_VATICAN_CITY = "\u{1F1FB}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_ST_VINCENT_AND_GRENADINES = "\u{1F1FB}\u{1F1E8}";
    const CHARACTER_FLAGS_FOR_FLAG_VENEZUELA = "\u{1F1FB}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_BRITISH_VIRGIN_ISLANDS = "\u{1F1FB}\u{1F1EC}";
    const CHARACTER_FLAGS_FOR_FLAG_US_VIRGIN_ISLANDS = "\u{1F1FB}\u{1F1EE}";
    const CHARACTER_FLAGS_FOR_FLAG_VIETNAM = "\u{1F1FB}\u{1F1F3}";
    const CHARACTER_FLAGS_FOR_FLAG_VANUATU = "\u{1F1FB}\u{1F1FA}";
    const CHARACTER_FLAGS_FOR_FLAG_WALLIS_AND_FUTUNA = "\u{1F1FC}\u{1F1EB}";
    const CHARACTER_FLAGS_FOR_FLAG_SAMOA = "\u{1F1FC}\u{1F1F8}";
    const CHARACTER_FLAGS_FOR_FLAG_KOSOVO = "\u{1F1FD}\u{1F1F0}";
    const CHARACTER_FLAGS_FOR_FLAG_YEMEN = "\u{1F1FE}\u{1F1EA}";
    const CHARACTER_FLAGS_FOR_FLAG_MAYOTTE = "\u{1F1FE}\u{1F1F9}";
    const CHARACTER_FLAGS_FOR_FLAG_SOUTH_AFRICA = "\u{1F1FF}\u{1F1E6}";
    const CHARACTER_FLAGS_FOR_FLAG_ZAMBIA = "\u{1F1FF}\u{1F1F2}";
    const CHARACTER_FLAGS_FOR_FLAG_ZIMBABWE = "\u{1F1FF}\u{1F1FC}";
    // ##### Emoji subgroup: SUBDIVISION-FLAG #####
    const CHARACTER_FLAGS_FOR_FLAG_ENGLAND = "\u{1F3F4}\u{E0067}\u{E0062}\u{E0065}\u{E006E}\u{E0067}\u{E007F}";
    const CHARACTER_FLAGS_FOR_FLAG_SCOTLAND = "\u{1F3F4}\u{E0067}\u{E0062}\u{E0073}\u{E0063}\u{E0074}\u{E007F}";
    const CHARACTER_FLAGS_FOR_FLAG_WALES = "\u{1F3F4}\u{E0067}\u{E0062}\u{E0077}\u{E006C}\u{E0073}\u{E007F}";

    public static function getCharacter(string $characterName): string
    {
        $constantName = static::convertCharacterNameToConstantName($characterName);

        if (! defined("static::{$constantName}")) {
            throw UnknownCharacter::create($characterName);
        }

        return constant('static::'.$constantName);
    }

    public static function countryFlag(string $countryCode): string
    {
        if (strlen($countryCode) !== 2) {
            throw CouldNotDetermineFlag::countryCodeLenghtIsWrong($countryCode);
        }

        $countryCode = mb_strtoupper($countryCode);

        return static::encodeCountryCodeLetter($countryCode[0]).static::encodeCountryCodeLetter($countryCode[1]);
    }

    public static function all(): array
    {
        $reflectionClass = new \ReflectionClass(self::class);

        return $reflectionClass->getConstants();
    }

    public static function __callStatic(string $methodName, array $parameters): string
    {
        return static::getCharacter($methodName);
    }

    protected static function convertCharacterNameToConstantName(string $characterName): string
    {
        $partialConstantName = static::convertToSnakeCase($characterName);

        $constantName = 'CHARACTER_'.mb_strtoupper($partialConstantName);

        return $constantName;
    }

    protected static function convertToSnakeCase(string $value): string
    {
        if (! ctype_lower($value)) {
            $value = preg_replace('/\s+/', '', $value);

            $value = mb_strtolower(preg_replace('/([^0-9])(?=[0-9])/', '$1'.'_', preg_replace('/(.)(?=[A-Z])/', '$1'.'_', $value)));
        }

        return $value;
    }

    protected static function encodeCountryCodeLetter(string $letter): string
    {
        return mb_convert_encoding('&#'.(127397 + ord($letter)).';', 'UTF-8', 'HTML-ENTITIES');
    }
}
