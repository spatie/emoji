<?php

namespace Spatie\Emoji;

use Spatie\Emoji\Exceptions\UnknownCharacter;

/**
 * Emoji class.
 *
 * @method static string keycapNumberSign()
 * @method static string keycapAsterisk()
 * @method static string keycapDigitZero()
 * @method static string keycapDigitOne()
 * @method static string keycapDigitTwo()
 * @method static string keycapDigitThree()
 * @method static string keycapDigitFour()
 * @method static string keycapDigitFive()
 * @method static string keycapDigitSix()
 * @method static string keycapDigitSeven()
 * @method static string keycapDigitEight()
 * @method static string keycapDigitNine()
 * @method static string copyrightSign()
 * @method static string registeredSign()
 * @method static string mahjongTileRedDragon()
 * @method static string playingCardBlackJoker()
 * @method static string negativeSquaredLatinCapitalLetterA()
 * @method static string negativeSquaredLatinCapitalLetterB()
 * @method static string negativeSquaredLatinCapitalLetterO()
 * @method static string negativeSquaredLatinCapitalLetterP()
 * @method static string negativeSquaredAb()
 * @method static string squaredCl()
 * @method static string squaredCool()
 * @method static string squaredFree()
 * @method static string squaredId()
 * @method static string squaredNew()
 * @method static string squaredNg()
 * @method static string squaredOk()
 * @method static string squaredSos()
 * @method static string squaredUpWithExclamationMark()
 * @method static string squaredVs()
 * @method static string flagForAscensionIsland()
 * @method static string flagForAndorra()
 * @method static string flagForUnitedArabEmirates()
 * @method static string flagForAfghanistan()
 * @method static string flagForAntiguaAndBarbuda()
 * @method static string flagForAnguilla()
 * @method static string flagForAlbania()
 * @method static string flagForArmenia()
 * @method static string flagForAngola()
 * @method static string flagForAntarctica()
 * @method static string flagForArgentina()
 * @method static string flagForAmericanSamoa()
 * @method static string flagForAustria()
 * @method static string flagForAustralia()
 * @method static string flagForAruba()
 * @method static string flagForLandIslands()
 * @method static string flagForAzerbaijan()
 * @method static string flagForBosniaAndHerzegovina()
 * @method static string flagForBarbados()
 * @method static string flagForBangladesh()
 * @method static string flagForBelgium()
 * @method static string flagForBurkinaFaso()
 * @method static string flagForBulgaria()
 * @method static string flagForBahrain()
 * @method static string flagForBurundi()
 * @method static string flagForBenin()
 * @method static string flagForStBarthelemy()
 * @method static string flagForBermuda()
 * @method static string flagForBrunei()
 * @method static string flagForBolivia()
 * @method static string flagForCaribbeanNetherlands()
 * @method static string flagForBrazil()
 * @method static string flagForBahamas()
 * @method static string flagForBhutan()
 * @method static string flagForBouvetIsland()
 * @method static string flagForBotswana()
 * @method static string flagForBelarus()
 * @method static string flagForBelize()
 * @method static string flagForCanada()
 * @method static string flagForCocosIslands()
 * @method static string flagForCongoKinshasa()
 * @method static string flagForCentralAfricanRepublic()
 * @method static string flagForCongoBrazzaville()
 * @method static string flagForSwitzerland()
 * @method static string flagForCoteDIvoire()
 * @method static string flagForCookIslands()
 * @method static string flagForChile()
 * @method static string flagForCameroon()
 * @method static string flagForChina()
 * @method static string flagForColombia()
 * @method static string flagForClippertonIsland()
 * @method static string flagForCostaRica()
 * @method static string flagForCuba()
 * @method static string flagForCapeVerde()
 * @method static string flagForCuracao()
 * @method static string flagForChristmasIsland()
 * @method static string flagForCyprus()
 * @method static string flagForCzechRepublic()
 * @method static string flagForGermany()
 * @method static string flagForDiegoGarcia()
 * @method static string flagForDjibouti()
 * @method static string flagForDenmark()
 * @method static string flagForDominica()
 * @method static string flagForDominicanRepublic()
 * @method static string flagForAlgeria()
 * @method static string flagForCeutaAndMelilla()
 * @method static string flagForEcuador()
 * @method static string flagForEstonia()
 * @method static string flagForEgypt()
 * @method static string flagForWesternSahara()
 * @method static string flagForEritrea()
 * @method static string flagForSpain()
 * @method static string flagForEthiopia()
 * @method static string flagForEuropeanUnion()
 * @method static string flagForFinland()
 * @method static string flagForFiji()
 * @method static string flagForFalklandIslands()
 * @method static string flagForMicronesia()
 * @method static string flagForFaroeIslands()
 * @method static string flagForFrance()
 * @method static string flagForGabon()
 * @method static string flagForUnitedKingdom()
 * @method static string flagForGrenada()
 * @method static string flagForGeorgia()
 * @method static string flagForFrenchGuiana()
 * @method static string flagForGuernsey()
 * @method static string flagForGhana()
 * @method static string flagForGibraltar()
 * @method static string flagForGreenland()
 * @method static string flagForGambia()
 * @method static string flagForGuinea()
 * @method static string flagForGuadeloupe()
 * @method static string flagForEquatorialGuinea()
 * @method static string flagForGreece()
 * @method static string flagForSouthGeorgiaAndSouthSandwichIslands()
 * @method static string flagForGuatemala()
 * @method static string flagForGuam()
 * @method static string flagForGuineaBissau()
 * @method static string flagForGuyana()
 * @method static string flagForHongKong()
 * @method static string flagForHeardAndMcdonaldIslands()
 * @method static string flagForHonduras()
 * @method static string flagForCroatia()
 * @method static string flagForHaiti()
 * @method static string flagForHungary()
 * @method static string flagForCanaryIslands()
 * @method static string flagForIndonesia()
 * @method static string flagForIreland()
 * @method static string flagForIsrael()
 * @method static string flagForIsleOfMan()
 * @method static string flagForIndia()
 * @method static string flagForBritishIndianOceanTerritory()
 * @method static string flagForIraq()
 * @method static string flagForIran()
 * @method static string flagForIceland()
 * @method static string flagForItaly()
 * @method static string flagForJersey()
 * @method static string flagForJamaica()
 * @method static string flagForJordan()
 * @method static string flagForJapan()
 * @method static string flagForKenya()
 * @method static string flagForKyrgyzstan()
 * @method static string flagForCambodia()
 * @method static string flagForKiribati()
 * @method static string flagForComoros()
 * @method static string flagForStKittsAndNevis()
 * @method static string flagForNorthKorea()
 * @method static string flagForSouthKorea()
 * @method static string flagForKuwait()
 * @method static string flagForCaymanIslands()
 * @method static string flagForKazakhstan()
 * @method static string flagForLaos()
 * @method static string flagForLebanon()
 * @method static string flagForStLucia()
 * @method static string flagForLiechtenstein()
 * @method static string flagForSriLanka()
 * @method static string flagForLiberia()
 * @method static string flagForLesotho()
 * @method static string flagForLithuania()
 * @method static string flagForLuxembourg()
 * @method static string flagForLatvia()
 * @method static string flagForLibya()
 * @method static string flagForMorocco()
 * @method static string flagForMonaco()
 * @method static string flagForMoldova()
 * @method static string flagForMontenegro()
 * @method static string flagForStMartin()
 * @method static string flagForMadagascar()
 * @method static string flagForMarshallIslands()
 * @method static string flagForMacedonia()
 * @method static string flagForMali()
 * @method static string flagForMyanmar()
 * @method static string flagForMongolia()
 * @method static string flagForMacau()
 * @method static string flagForNorthernMarianaIslands()
 * @method static string flagForMartinique()
 * @method static string flagForMauritania()
 * @method static string flagForMontserrat()
 * @method static string flagForMalta()
 * @method static string flagForMauritius()
 * @method static string flagForMaldives()
 * @method static string flagForMalawi()
 * @method static string flagForMexico()
 * @method static string flagForMalaysia()
 * @method static string flagForMozambique()
 * @method static string flagForNamibia()
 * @method static string flagForNewCaledonia()
 * @method static string flagForNiger()
 * @method static string flagForNorfolkIsland()
 * @method static string flagForNigeria()
 * @method static string flagForNicaragua()
 * @method static string flagForNetherlands()
 * @method static string flagForNorway()
 * @method static string flagForNepal()
 * @method static string flagForNauru()
 * @method static string flagForNiue()
 * @method static string flagForNewZealand()
 * @method static string flagForOman()
 * @method static string flagForPanama()
 * @method static string flagForPeru()
 * @method static string flagForFrenchPolynesia()
 * @method static string flagForPapuaNewGuinea()
 * @method static string flagForPhilippines()
 * @method static string flagForPakistan()
 * @method static string flagForPoland()
 * @method static string flagForStPierreAndMiquelon()
 * @method static string flagForPitcairnIslands()
 * @method static string flagForPuertoRico()
 * @method static string flagForPalestinianTerritories()
 * @method static string flagForPortugal()
 * @method static string flagForPalau()
 * @method static string flagForParaguay()
 * @method static string flagForQatar()
 * @method static string flagForRUnion()
 * @method static string flagForRomania()
 * @method static string flagForSerbia()
 * @method static string flagForRussia()
 * @method static string flagForRwanda()
 * @method static string flagForSaudiArabia()
 * @method static string flagForSolomonIslands()
 * @method static string flagForSeychelles()
 * @method static string flagForSudan()
 * @method static string flagForSweden()
 * @method static string flagForSingapore()
 * @method static string flagForStHelena()
 * @method static string flagForSlovenia()
 * @method static string flagForSvalbardAndJanMayen()
 * @method static string flagForSlovakia()
 * @method static string flagForSierraLeone()
 * @method static string flagForSanMarino()
 * @method static string flagForSenegal()
 * @method static string flagForSomalia()
 * @method static string flagForSuriname()
 * @method static string flagForSouthSudan()
 * @method static string flagForSaoTomeAndPrincipe()
 * @method static string flagForElSalvador()
 * @method static string flagForSintMaarten()
 * @method static string flagForSyria()
 * @method static string flagForSwaziland()
 * @method static string flagForTristanDaCunha()
 * @method static string flagForTurksAndCaicosIslands()
 * @method static string flagForChad()
 * @method static string flagForFrenchSouthernTerritories()
 * @method static string flagForTogo()
 * @method static string flagForThailand()
 * @method static string flagForTajikistan()
 * @method static string flagForTokelau()
 * @method static string flagForTimorLeste()
 * @method static string flagForTurkmenistan()
 * @method static string flagForTunisia()
 * @method static string flagForTonga()
 * @method static string flagForTurkey()
 * @method static string flagForTrinidadAndTobago()
 * @method static string flagForTuvalu()
 * @method static string flagForTaiwan()
 * @method static string flagForTanzania()
 * @method static string flagForUkraine()
 * @method static string flagForUganda()
 * @method static string flagForUsOutlyingIslands()
 * @method static string flagForUnitedStates()
 * @method static string flagForUruguay()
 * @method static string flagForUzbekistan()
 * @method static string flagForVaticanCity()
 * @method static string flagForStVincentAndGrenadines()
 * @method static string flagForVenezuela()
 * @method static string flagForBritishVirginIslands()
 * @method static string flagForUsVirginIslands()
 * @method static string flagForVietnam()
 * @method static string flagForVanuatu()
 * @method static string flagForWallisAndFutuna()
 * @method static string flagForSamoa()
 * @method static string flagForKosovo()
 * @method static string flagForYemen()
 * @method static string flagForMayotte()
 * @method static string flagForSouthAfrica()
 * @method static string flagForZambia()
 * @method static string flagForZimbabwe()
 * @method static string squaredKatakanaKoko()
 * @method static string squaredKatakanaSa()
 * @method static string squaredCjkUnifiedIdeograph7121()
 * @method static string squaredCjkUnifiedIdeograph6307()
 * @method static string squaredCjkUnifiedIdeograph7981()
 * @method static string squaredCjkUnifiedIdeograph7a7a()
 * @method static string squaredCjkUnifiedIdeograph5408()
 * @method static string squaredCjkUnifiedIdeograph6e80()
 * @method static string squaredCjkUnifiedIdeograph6709()
 * @method static string squaredCjkUnifiedIdeograph6708()
 * @method static string squaredCjkUnifiedIdeograph7533()
 * @method static string squaredCjkUnifiedIdeograph5272()
 * @method static string squaredCjkUnifiedIdeograph55b6()
 * @method static string circledIdeographAdvantage()
 * @method static string circledIdeographAccept()
 * @method static string cyclone()
 * @method static string foggy()
 * @method static string closedUmbrella()
 * @method static string nightWithStars()
 * @method static string sunriseOverMountains()
 * @method static string sunrise()
 * @method static string cityscapeAtDusk()
 * @method static string sunsetOverBuildings()
 * @method static string rainbow()
 * @method static string bridgeAtNight()
 * @method static string waterWave()
 * @method static string volcano()
 * @method static string milkyWay()
 * @method static string earthGlobeEuropeAfrica()
 * @method static string earthGlobeAmericas()
 * @method static string earthGlobeAsiaAustralia()
 * @method static string globeWithMeridians()
 * @method static string newMoonSymbol()
 * @method static string waxingCrescentMoonSymbol()
 * @method static string firstQuarterMoonSymbol()
 * @method static string waxingGibbousMoonSymbol()
 * @method static string fullMoonSymbol()
 * @method static string waningGibbousMoonSymbol()
 * @method static string lastQuarterMoonSymbol()
 * @method static string waningCrescentMoonSymbol()
 * @method static string crescentMoon()
 * @method static string newMoonWithFace()
 * @method static string firstQuarterMoonWithFace()
 * @method static string lastQuarterMoonWithFace()
 * @method static string fullMoonWithFace()
 * @method static string sunWithFace()
 * @method static string glowingStar()
 * @method static string shootingStar()
 * @method static string thermometer()
 * @method static string whiteSunWithSmallCloud()
 * @method static string whiteSunBehindCloud()
 * @method static string whiteSunBehindCloudWithRain()
 * @method static string cloudWithRain()
 * @method static string cloudWithSnow()
 * @method static string cloudWithLightning()
 * @method static string cloudWithTornado()
 * @method static string fog()
 * @method static string windBlowingFace()
 * @method static string hotDog()
 * @method static string taco()
 * @method static string burrito()
 * @method static string chestnut()
 * @method static string seedling()
 * @method static string evergreenTree()
 * @method static string deciduousTree()
 * @method static string palmTree()
 * @method static string cactus()
 * @method static string hotPepper()
 * @method static string tulip()
 * @method static string cherryBlossom()
 * @method static string rose()
 * @method static string hibiscus()
 * @method static string sunflower()
 * @method static string blossom()
 * @method static string earOfMaize()
 * @method static string earOfRice()
 * @method static string herb()
 * @method static string fourLeafClover()
 * @method static string mapleLeaf()
 * @method static string fallenLeaf()
 * @method static string leafFlutteringInWind()
 * @method static string mushroom()
 * @method static string tomato()
 * @method static string aubergine()
 * @method static string grapes()
 * @method static string melon()
 * @method static string watermelon()
 * @method static string tangerine()
 * @method static string lemon()
 * @method static string banana()
 * @method static string pineapple()
 * @method static string redApple()
 * @method static string greenApple()
 * @method static string pear()
 * @method static string peach()
 * @method static string cherries()
 * @method static string strawberry()
 * @method static string hamburger()
 * @method static string sliceOfPizza()
 * @method static string meatOnBone()
 * @method static string poultryLeg()
 * @method static string riceCracker()
 * @method static string riceBall()
 * @method static string cookedRice()
 * @method static string curryAndRice()
 * @method static string steamingBowl()
 * @method static string spaghetti()
 * @method static string bread()
 * @method static string frenchFries()
 * @method static string roastedSweetPotato()
 * @method static string dango()
 * @method static string oden()
 * @method static string sushi()
 * @method static string friedShrimp()
 * @method static string fishCakeWithSwirlDesign()
 * @method static string softIceCream()
 * @method static string shavedIce()
 * @method static string iceCream()
 * @method static string doughnut()
 * @method static string cookie()
 * @method static string chocolateBar()
 * @method static string candy()
 * @method static string lollipop()
 * @method static string custard()
 * @method static string honeyPot()
 * @method static string shortcake()
 * @method static string bentoBox()
 * @method static string potOfFood()
 * @method static string cooking()
 * @method static string forkAndKnife()
 * @method static string teacupWithoutHandle()
 * @method static string sakeBottleAndCup()
 * @method static string wineGlass()
 * @method static string cocktailGlass()
 * @method static string tropicalDrink()
 * @method static string beerMug()
 * @method static string clinkingBeerMugs()
 * @method static string babyBottle()
 * @method static string forkAndKnifeWithPlate()
 * @method static string bottleWithPoppingCork()
 * @method static string popcorn()
 * @method static string ribbon()
 * @method static string wrappedPresent()
 * @method static string birthdayCake()
 * @method static string jackOLantern()
 * @method static string christmasTree()
 * @method static string fatherChristmas()
 * @method static string fireworks()
 * @method static string fireworkSparkler()
 * @method static string balloon()
 * @method static string partyPopper()
 * @method static string confettiBall()
 * @method static string tanabataTree()
 * @method static string crossedFlags()
 * @method static string pineDecoration()
 * @method static string japaneseDolls()
 * @method static string carpStreamer()
 * @method static string windChime()
 * @method static string moonViewingCeremony()
 * @method static string schoolSatchel()
 * @method static string graduationCap()
 * @method static string militaryMedal()
 * @method static string reminderRibbon()
 * @method static string studioMicrophone()
 * @method static string levelSlider()
 * @method static string controlKnobs()
 * @method static string filmFrames()
 * @method static string admissionTickets()
 * @method static string carouselHorse()
 * @method static string ferrisWheel()
 * @method static string rollerCoaster()
 * @method static string fishingPoleAndFish()
 * @method static string microphone()
 * @method static string movieCamera()
 * @method static string cinema()
 * @method static string headphone()
 * @method static string artistPalette()
 * @method static string topHat()
 * @method static string circusTent()
 * @method static string ticket()
 * @method static string clapperBoard()
 * @method static string performingArts()
 * @method static string videoGame()
 * @method static string directHit()
 * @method static string slotMachine()
 * @method static string billiards()
 * @method static string gameDie()
 * @method static string bowling()
 * @method static string flowerPlayingCards()
 * @method static string musicalNote()
 * @method static string multipleMusicalNotes()
 * @method static string saxophone()
 * @method static string guitar()
 * @method static string musicalKeyboard()
 * @method static string trumpet()
 * @method static string violin()
 * @method static string musicalScore()
 * @method static string runningShirtWithSash()
 * @method static string tennisRacquetAndBall()
 * @method static string skiAndSkiBoot()
 * @method static string basketballAndHoop()
 * @method static string chequeredFlag()
 * @method static string snowboarder()
 * @method static string runner()
 * @method static string surfer()
 * @method static string sportsMedal()
 * @method static string trophy()
 * @method static string horseRacing()
 * @method static string americanFootball()
 * @method static string rugbyFootball()
 * @method static string swimmer()
 * @method static string weightLifter()
 * @method static string golfer()
 * @method static string racingMotorcycle()
 * @method static string racingCar()
 * @method static string cricketBatAndBall()
 * @method static string volleyball()
 * @method static string fieldHockeyStickAndBall()
 * @method static string iceHockeyStickAndPuck()
 * @method static string tableTennisPaddleAndBall()
 * @method static string snowCappedMountain()
 * @method static string camping()
 * @method static string beachWithUmbrella()
 * @method static string buildingConstruction()
 * @method static string houseBuildings()
 * @method static string cityscape()
 * @method static string derelictHouseBuilding()
 * @method static string classicalBuilding()
 * @method static string desert()
 * @method static string desertIsland()
 * @method static string nationalPark()
 * @method static string stadium()
 * @method static string houseBuilding()
 * @method static string houseWithGarden()
 * @method static string officeBuilding()
 * @method static string japanesePostOffice()
 * @method static string europeanPostOffice()
 * @method static string hospital()
 * @method static string bank()
 * @method static string automatedTellerMachine()
 * @method static string hotel()
 * @method static string loveHotel()
 * @method static string convenienceStore()
 * @method static string school()
 * @method static string departmentStore()
 * @method static string factory()
 * @method static string izakayaLantern()
 * @method static string japaneseCastle()
 * @method static string europeanCastle()
 * @method static string wavingWhiteFlag()
 * @method static string wavingBlackFlag()
 * @method static string rosette()
 * @method static string label()
 * @method static string badmintonRacquetAndShuttlecock()
 * @method static string bowAndArrow()
 * @method static string amphora()
 * @method static string emojiModifierFitzpatrickType12()
 * @method static string emojiModifierFitzpatrickType3()
 * @method static string emojiModifierFitzpatrickType4()
 * @method static string emojiModifierFitzpatrickType5()
 * @method static string emojiModifierFitzpatrickType6()
 * @method static string rat()
 * @method static string mouse()
 * @method static string ox()
 * @method static string waterBuffalo()
 * @method static string cow()
 * @method static string tiger()
 * @method static string leopard()
 * @method static string rabbit()
 * @method static string cat()
 * @method static string dragon()
 * @method static string crocodile()
 * @method static string whale()
 * @method static string snail()
 * @method static string snake()
 * @method static string horse()
 * @method static string ram()
 * @method static string goat()
 * @method static string sheep()
 * @method static string monkey()
 * @method static string rooster()
 * @method static string chicken()
 * @method static string dog()
 * @method static string pig()
 * @method static string boar()
 * @method static string elephant()
 * @method static string octopus()
 * @method static string spiralShell()
 * @method static string bug()
 * @method static string ant()
 * @method static string honeybee()
 * @method static string ladyBeetle()
 * @method static string fish()
 * @method static string tropicalFish()
 * @method static string blowfish()
 * @method static string turtle()
 * @method static string hatchingChick()
 * @method static string babyChick()
 * @method static string frontFacingBabyChick()
 * @method static string bird()
 * @method static string penguin()
 * @method static string koala()
 * @method static string poodle()
 * @method static string dromedaryCamel()
 * @method static string bactrianCamel()
 * @method static string dolphin()
 * @method static string mouseFace()
 * @method static string cowFace()
 * @method static string tigerFace()
 * @method static string rabbitFace()
 * @method static string catFace()
 * @method static string dragonFace()
 * @method static string spoutingWhale()
 * @method static string horseFace()
 * @method static string monkeyFace()
 * @method static string dogFace()
 * @method static string pigFace()
 * @method static string frogFace()
 * @method static string hamsterFace()
 * @method static string wolfFace()
 * @method static string bearFace()
 * @method static string pandaFace()
 * @method static string pigNose()
 * @method static string pawPrints()
 * @method static string chipmunk()
 * @method static string eyes()
 * @method static string eye()
 * @method static string ear()
 * @method static string nose()
 * @method static string mouth()
 * @method static string tongue()
 * @method static string whiteUpPointingBackhandIndex()
 * @method static string whiteDownPointingBackhandIndex()
 * @method static string whiteLeftPointingBackhandIndex()
 * @method static string whiteRightPointingBackhandIndex()
 * @method static string fistedHandSign()
 * @method static string wavingHandSign()
 * @method static string okHandSign()
 * @method static string thumbsUpSign()
 * @method static string thumbsDownSign()
 * @method static string clappingHandsSign()
 * @method static string openHandsSign()
 * @method static string crown()
 * @method static string womansHat()
 * @method static string eyeglasses()
 * @method static string necktie()
 * @method static string tShirt()
 * @method static string jeans()
 * @method static string dress()
 * @method static string kimono()
 * @method static string bikini()
 * @method static string womansClothes()
 * @method static string purse()
 * @method static string handbag()
 * @method static string pouch()
 * @method static string mansShoe()
 * @method static string athleticShoe()
 * @method static string highHeeledShoe()
 * @method static string womansSandal()
 * @method static string womansBoots()
 * @method static string footprints()
 * @method static string bustInSilhouette()
 * @method static string bustsInSilhouette()
 * @method static string boy()
 * @method static string girl()
 * @method static string man()
 * @method static string familyMan()
 * @method static string coupleWithHeartMan()
 * @method static string kissMan()
 * @method static string woman()
 * @method static string familyWoman()
 * @method static string coupleWithHeartWoman()
 * @method static string kissWoman()
 * @method static string family()
 * @method static string manAndWomanHoldingHands()
 * @method static string twoMenHoldingHands()
 * @method static string twoWomenHoldingHands()
 * @method static string policeOfficer()
 * @method static string womanWithBunnyEars()
 * @method static string brideWithVeil()
 * @method static string personWithBlondHair()
 * @method static string manWithGuaPiMao()
 * @method static string manWithTurban()
 * @method static string olderMan()
 * @method static string olderWoman()
 * @method static string baby()
 * @method static string constructionWorker()
 * @method static string princess()
 * @method static string japaneseOgre()
 * @method static string japaneseGoblin()
 * @method static string ghost()
 * @method static string babyAngel()
 * @method static string extraterrestrialAlien()
 * @method static string alienMonster()
 * @method static string imp()
 * @method static string skull()
 * @method static string informationDeskPerson()
 * @method static string guardsman()
 * @method static string dancer()
 * @method static string lipstick()
 * @method static string nailPolish()
 * @method static string faceMassage()
 * @method static string haircut()
 * @method static string barberPole()
 * @method static string syringe()
 * @method static string pill()
 * @method static string kissMark()
 * @method static string loveLetter()
 * @method static string ring()
 * @method static string gemStone()
 * @method static string bouquet()
 * @method static string wedding()
 * @method static string beatingHeart()
 * @method static string brokenHeart()
 * @method static string twoHearts()
 * @method static string sparklingHeart()
 * @method static string growingHeart()
 * @method static string heartWithArrow()
 * @method static string blueHeart()
 * @method static string greenHeart()
 * @method static string yellowHeart()
 * @method static string purpleHeart()
 * @method static string heartWithRibbon()
 * @method static string revolvingHearts()
 * @method static string heartDecoration()
 * @method static string diamondShapeWithADotInside()
 * @method static string electricLightBulb()
 * @method static string angerSymbol()
 * @method static string bomb()
 * @method static string sleepingSymbol()
 * @method static string collisionSymbol()
 * @method static string splashingSweatSymbol()
 * @method static string droplet()
 * @method static string dashSymbol()
 * @method static string pileOfPoo()
 * @method static string flexedBiceps()
 * @method static string dizzySymbol()
 * @method static string speechBalloon()
 * @method static string thoughtBalloon()
 * @method static string whiteFlower()
 * @method static string hundredPointsSymbol()
 * @method static string moneyBag()
 * @method static string currencyExchange()
 * @method static string heavyDollarSign()
 * @method static string creditCard()
 * @method static string banknoteWithYenSign()
 * @method static string banknoteWithDollarSign()
 * @method static string banknoteWithEuroSign()
 * @method static string banknoteWithPoundSign()
 * @method static string moneyWithWings()
 * @method static string chartWithUpwardsTrendAndYenSign()
 * @method static string seat()
 * @method static string personalComputer()
 * @method static string briefcase()
 * @method static string minidisc()
 * @method static string floppyDisk()
 * @method static string opticalDisc()
 * @method static string dvd()
 * @method static string fileFolder()
 * @method static string openFileFolder()
 * @method static string pageWithCurl()
 * @method static string pageFacingUp()
 * @method static string calendar()
 * @method static string tearOffCalendar()
 * @method static string cardIndex()
 * @method static string chartWithUpwardsTrend()
 * @method static string chartWithDownwardsTrend()
 * @method static string barChart()
 * @method static string clipboard()
 * @method static string pushpin()
 * @method static string roundPushpin()
 * @method static string paperclip()
 * @method static string straightRuler()
 * @method static string triangularRuler()
 * @method static string bookmarkTabs()
 * @method static string ledger()
 * @method static string notebook()
 * @method static string notebookWithDecorativeCover()
 * @method static string closedBook()
 * @method static string openBook()
 * @method static string greenBook()
 * @method static string blueBook()
 * @method static string orangeBook()
 * @method static string books()
 * @method static string nameBadge()
 * @method static string scroll()
 * @method static string memo()
 * @method static string telephoneReceiver()
 * @method static string pager()
 * @method static string faxMachine()
 * @method static string satelliteAntenna()
 * @method static string publicAddressLoudspeaker()
 * @method static string cheeringMegaphone()
 * @method static string outboxTray()
 * @method static string inboxTray()
 * @method static string package()
 * @method static string eMailSymbol()
 * @method static string incomingEnvelope()
 * @method static string envelopeWithDownwardsArrowAbove()
 * @method static string closedMailboxWithLoweredFlag()
 * @method static string closedMailboxWithRaisedFlag()
 * @method static string openMailboxWithRaisedFlag()
 * @method static string openMailboxWithLoweredFlag()
 * @method static string postbox()
 * @method static string postalHorn()
 * @method static string newspaper()
 * @method static string mobilePhone()
 * @method static string mobilePhoneWithRightwardsArrowAtLeft()
 * @method static string vibrationMode()
 * @method static string mobilePhoneOff()
 * @method static string noMobilePhones()
 * @method static string antennaWithBars()
 * @method static string camera()
 * @method static string cameraWithFlash()
 * @method static string videoCamera()
 * @method static string television()
 * @method static string radio()
 * @method static string videocassette()
 * @method static string filmProjector()
 * @method static string prayerBeads()
 * @method static string twistedRightwardsArrows()
 * @method static string clockwiseRightwardsAndLeftwardsOpenCircleArrows()
 * @method static string clockwiseRightwardsAndLeftwardsOpenCircleArrowsWithCircledOneOverlay()
 * @method static string clockwiseDownwardsAndUpwardsOpenCircleArrows()
 * @method static string anticlockwiseDownwardsAndUpwardsOpenCircleArrows()
 * @method static string lowBrightnessSymbol()
 * @method static string highBrightnessSymbol()
 * @method static string speakerWithCancellationStroke()
 * @method static string speaker()
 * @method static string speakerWithOneSoundWave()
 * @method static string speakerWithThreeSoundWaves()
 * @method static string battery()
 * @method static string electricPlug()
 * @method static string leftPointingMagnifyingGlass()
 * @method static string rightPointingMagnifyingGlass()
 * @method static string lockWithInkPen()
 * @method static string closedLockWithKey()
 * @method static string key()
 * @method static string lock()
 * @method static string openLock()
 * @method static string bell()
 * @method static string bellWithCancellationStroke()
 * @method static string bookmark()
 * @method static string linkSymbol()
 * @method static string radioButton()
 * @method static string backWithLeftwardsArrowAbove()
 * @method static string endWithLeftwardsArrowAbove()
 * @method static string onWithExclamationMarkWithLeftRightArrowAbove()
 * @method static string soonWithRightwardsArrowAbove()
 * @method static string topWithUpwardsArrowAbove()
 * @method static string noOneUnderEighteenSymbol()
 * @method static string keycapTen()
 * @method static string inputSymbolForLatinCapitalLetters()
 * @method static string inputSymbolForLatinSmallLetters()
 * @method static string inputSymbolForNumbers()
 * @method static string inputSymbolForSymbols()
 * @method static string inputSymbolForLatinLetters()
 * @method static string fire()
 * @method static string electricTorch()
 * @method static string wrench()
 * @method static string hammer()
 * @method static string nutAndBolt()
 * @method static string hocho()
 * @method static string pistol()
 * @method static string microscope()
 * @method static string telescope()
 * @method static string crystalBall()
 * @method static string sixPointedStarWithMiddleDot()
 * @method static string japaneseSymbolForBeginner()
 * @method static string tridentEmblem()
 * @method static string blackSquareButton()
 * @method static string whiteSquareButton()
 * @method static string largeRedCircle()
 * @method static string largeBlueCircle()
 * @method static string largeOrangeDiamond()
 * @method static string largeBlueDiamond()
 * @method static string smallOrangeDiamond()
 * @method static string smallBlueDiamond()
 * @method static string upPointingRedTriangle()
 * @method static string downPointingRedTriangle()
 * @method static string upPointingSmallRedTriangle()
 * @method static string downPointingSmallRedTriangle()
 * @method static string omSymbol()
 * @method static string doveOfPeace()
 * @method static string kaaba()
 * @method static string mosque()
 * @method static string synagogue()
 * @method static string menorahWithNineBranches()
 * @method static string clockFaceOneOclock()
 * @method static string clockFaceTwoOclock()
 * @method static string clockFaceThreeOclock()
 * @method static string clockFaceFourOclock()
 * @method static string clockFaceFiveOclock()
 * @method static string clockFaceSixOclock()
 * @method static string clockFaceSevenOclock()
 * @method static string clockFaceEightOclock()
 * @method static string clockFaceNineOclock()
 * @method static string clockFaceTenOclock()
 * @method static string clockFaceElevenOclock()
 * @method static string clockFaceTwelveOclock()
 * @method static string clockFaceOneThirty()
 * @method static string clockFaceTwoThirty()
 * @method static string clockFaceThreeThirty()
 * @method static string clockFaceFourThirty()
 * @method static string clockFaceFiveThirty()
 * @method static string clockFaceSixThirty()
 * @method static string clockFaceSevenThirty()
 * @method static string clockFaceEightThirty()
 * @method static string clockFaceNineThirty()
 * @method static string clockFaceTenThirty()
 * @method static string clockFaceElevenThirty()
 * @method static string clockFaceTwelveThirty()
 * @method static string candle()
 * @method static string mantelpieceClock()
 * @method static string hole()
 * @method static string manInBusinessSuitLevitating()
 * @method static string sleuthOrSpy()
 * @method static string darkSunglasses()
 * @method static string spider()
 * @method static string spiderWeb()
 * @method static string joystick()
 * @method static string linkedPaperclips()
 * @method static string lowerLeftBallpointPen()
 * @method static string lowerLeftFountainPen()
 * @method static string lowerLeftPaintbrush()
 * @method static string lowerLeftCrayon()
 * @method static string raisedHandWithFingersSplayed()
 * @method static string reversedHandWithMiddleFingerExtended()
 * @method static string raisedHandWithPartBetweenMiddleAndRingFingers()
 * @method static string desktopComputer()
 * @method static string printer()
 * @method static string threeButtonMouse()
 * @method static string trackball()
 * @method static string frameWithPicture()
 * @method static string cardIndexDividers()
 * @method static string cardFileBox()
 * @method static string fileCabinet()
 * @method static string wastebasket()
 * @method static string spiralNotePad()
 * @method static string spiralCalendarPad()
 * @method static string compression()
 * @method static string oldKey()
 * @method static string rolledUpNewspaper()
 * @method static string daggerKnife()
 * @method static string speakingHeadInSilhouette()
 * @method static string leftSpeechBubble()
 * @method static string rightAngerBubble()
 * @method static string ballotBoxWithBallot()
 * @method static string worldMap()
 * @method static string mountFuji()
 * @method static string tokyoTower()
 * @method static string statueOfLiberty()
 * @method static string silhouetteOfJapan()
 * @method static string moyai()
 * @method static string grinningFace()
 * @method static string grinningFaceWithSmilingEyes()
 * @method static string faceWithTearsOfJoy()
 * @method static string smilingFaceWithOpenMouth()
 * @method static string smilingFaceWithOpenMouthAndSmilingEyes()
 * @method static string smilingFaceWithOpenMouthAndColdSweat()
 * @method static string smilingFaceWithOpenMouthAndTightlyClosedEyes()
 * @method static string smilingFaceWithHalo()
 * @method static string smilingFaceWithHorns()
 * @method static string winkingFace()
 * @method static string smilingFaceWithSmilingEyes()
 * @method static string faceSavouringDeliciousFood()
 * @method static string relievedFace()
 * @method static string smilingFaceWithHeartShapedEyes()
 * @method static string smilingFaceWithSunglasses()
 * @method static string smirkingFace()
 * @method static string neutralFace()
 * @method static string expressionlessFace()
 * @method static string unamusedFace()
 * @method static string faceWithColdSweat()
 * @method static string pensiveFace()
 * @method static string confusedFace()
 * @method static string confoundedFace()
 * @method static string kissingFace()
 * @method static string faceThrowingAKiss()
 * @method static string kissingFaceWithSmilingEyes()
 * @method static string kissingFaceWithClosedEyes()
 * @method static string faceWithStuckOutTongue()
 * @method static string faceWithStuckOutTongueAndWinkingEye()
 * @method static string faceWithStuckOutTongueAndTightlyClosedEyes()
 * @method static string disappointedFace()
 * @method static string worriedFace()
 * @method static string angryFace()
 * @method static string poutingFace()
 * @method static string cryingFace()
 * @method static string perseveringFace()
 * @method static string faceWithLookOfTriumph()
 * @method static string disappointedButRelievedFace()
 * @method static string frowningFaceWithOpenMouth()
 * @method static string anguishedFace()
 * @method static string fearfulFace()
 * @method static string wearyFace()
 * @method static string sleepyFace()
 * @method static string tiredFace()
 * @method static string grimacingFace()
 * @method static string loudlyCryingFace()
 * @method static string faceWithOpenMouth()
 * @method static string hushedFace()
 * @method static string faceWithOpenMouthAndColdSweat()
 * @method static string faceScreamingInFear()
 * @method static string astonishedFace()
 * @method static string flushedFace()
 * @method static string sleepingFace()
 * @method static string dizzyFace()
 * @method static string faceWithoutMouth()
 * @method static string faceWithMedicalMask()
 * @method static string grinningCatFaceWithSmilingEyes()
 * @method static string catFaceWithTearsOfJoy()
 * @method static string smilingCatFaceWithOpenMouth()
 * @method static string smilingCatFaceWithHeartShapedEyes()
 * @method static string catFaceWithWrySmile()
 * @method static string kissingCatFaceWithClosedEyes()
 * @method static string poutingCatFace()
 * @method static string cryingCatFace()
 * @method static string wearyCatFace()
 * @method static string slightlyFrowningFace()
 * @method static string slightlySmilingFace()
 * @method static string upsideDownFace()
 * @method static string faceWithRollingEyes()
 * @method static string faceWithNoGoodGesture()
 * @method static string faceWithOkGesture()
 * @method static string personBowingDeeply()
 * @method static string seeNoEvilMonkey()
 * @method static string hearNoEvilMonkey()
 * @method static string speakNoEvilMonkey()
 * @method static string happyPersonRaisingOneHand()
 * @method static string personRaisingBothHandsInCelebration()
 * @method static string personFrowning()
 * @method static string personWithPoutingFace()
 * @method static string personWithFoldedHands()
 * @method static string rocket()
 * @method static string helicopter()
 * @method static string steamLocomotive()
 * @method static string railwayCar()
 * @method static string highSpeedTrain()
 * @method static string highSpeedTrainWithBulletNose()
 * @method static string train()
 * @method static string metro()
 * @method static string lightRail()
 * @method static string station()
 * @method static string tram()
 * @method static string tramCar()
 * @method static string bus()
 * @method static string oncomingBus()
 * @method static string trolleybus()
 * @method static string busStop()
 * @method static string minibus()
 * @method static string ambulance()
 * @method static string fireEngine()
 * @method static string policeCar()
 * @method static string oncomingPoliceCar()
 * @method static string taxi()
 * @method static string oncomingTaxi()
 * @method static string automobile()
 * @method static string oncomingAutomobile()
 * @method static string recreationalVehicle()
 * @method static string deliveryTruck()
 * @method static string articulatedLorry()
 * @method static string tractor()
 * @method static string monorail()
 * @method static string mountainRailway()
 * @method static string suspensionRailway()
 * @method static string mountainCableway()
 * @method static string aerialTramway()
 * @method static string ship()
 * @method static string rowboat()
 * @method static string speedboat()
 * @method static string horizontalTrafficLight()
 * @method static string verticalTrafficLight()
 * @method static string constructionSign()
 * @method static string policeCarsRevolvingLight()
 * @method static string triangularFlagOnPost()
 * @method static string door()
 * @method static string noEntrySign()
 * @method static string smokingSymbol()
 * @method static string noSmokingSymbol()
 * @method static string putLitterInItsPlaceSymbol()
 * @method static string doNotLitterSymbol()
 * @method static string potableWaterSymbol()
 * @method static string nonPotableWaterSymbol()
 * @method static string bicycle()
 * @method static string noBicycles()
 * @method static string bicyclist()
 * @method static string mountainBicyclist()
 * @method static string pedestrian()
 * @method static string noPedestrians()
 * @method static string childrenCrossing()
 * @method static string mensSymbol()
 * @method static string womensSymbol()
 * @method static string restroom()
 * @method static string babySymbol()
 * @method static string toilet()
 * @method static string waterCloset()
 * @method static string shower()
 * @method static string bath()
 * @method static string bathtub()
 * @method static string passportControl()
 * @method static string customs()
 * @method static string baggageClaim()
 * @method static string leftLuggage()
 * @method static string couchAndLamp()
 * @method static string sleepingAccommodation()
 * @method static string shoppingBags()
 * @method static string bellhopBell()
 * @method static string bed()
 * @method static string placeOfWorship()
 * @method static string hammerAndWrench()
 * @method static string shield()
 * @method static string oilDrum()
 * @method static string motorway()
 * @method static string railwayTrack()
 * @method static string motorBoat()
 * @method static string smallAirplane()
 * @method static string airplaneDeparture()
 * @method static string airplaneArriving()
 * @method static string satellite()
 * @method static string passengerShip()
 * @method static string zipperMouthFace()
 * @method static string moneyMouthFace()
 * @method static string faceWithThermometer()
 * @method static string nerdFace()
 * @method static string thinkingFace()
 * @method static string faceWithHeadBandage()
 * @method static string robotFace()
 * @method static string huggingFace()
 * @method static string signOfTheHorns()
 * @method static string crab()
 * @method static string lionFace()
 * @method static string scorpion()
 * @method static string turkey()
 * @method static string unicornFace()
 * @method static string cheeseWedge()
 * @method static string doubleExclamationMark()
 * @method static string exclamationQuestionMark()
 * @method static string tradeMarkSign()
 * @method static string informationSource()
 * @method static string leftRightArrow()
 * @method static string upDownArrow()
 * @method static string northWestArrow()
 * @method static string northEastArrow()
 * @method static string southEastArrow()
 * @method static string southWestArrow()
 * @method static string leftwardsArrowWithHook()
 * @method static string rightwardsArrowWithHook()
 * @method static string watch()
 * @method static string hourglass()
 * @method static string keyboard()
 * @method static string ejectSymbol()
 * @method static string blackRightPointingDoubleTriangle()
 * @method static string blackLeftPointingDoubleTriangle()
 * @method static string blackUpPointingDoubleTriangle()
 * @method static string blackDownPointingDoubleTriangle()
 * @method static string blackRightPointingDoubleTriangleWithVerticalBar()
 * @method static string blackLeftPointingDoubleTriangleWithVerticalBar()
 * @method static string blackRightPointingTriangleWithDoubleVerticalBar()
 * @method static string alarmClock()
 * @method static string stopwatch()
 * @method static string timerClock()
 * @method static string hourglassWithFlowingSand()
 * @method static string doubleVerticalBar()
 * @method static string blackSquareForStop()
 * @method static string blackCircleForRecord()
 * @method static string circledLatinCapitalLetterM()
 * @method static string blackSmallSquare()
 * @method static string whiteSmallSquare()
 * @method static string blackRightPointingTriangle()
 * @method static string blackLeftPointingTriangle()
 * @method static string whiteMediumSquare()
 * @method static string blackMediumSquare()
 * @method static string whiteMediumSmallSquare()
 * @method static string blackMediumSmallSquare()
 * @method static string blackSunWithRays()
 * @method static string cloud()
 * @method static string umbrella()
 * @method static string snowman()
 * @method static string comet()
 * @method static string blackTelephone()
 * @method static string ballotBoxWithCheck()
 * @method static string umbrellaWithRainDrops()
 * @method static string hotBeverage()
 * @method static string shamrock()
 * @method static string whiteUpPointingIndex()
 * @method static string skullAndCrossbones()
 * @method static string radioactiveSign()
 * @method static string biohazardSign()
 * @method static string orthodoxCross()
 * @method static string starAndCrescent()
 * @method static string peaceSymbol()
 * @method static string yinYang()
 * @method static string wheelOfDharma()
 * @method static string whiteFrowningFace()
 * @method static string whiteSmilingFace()
 * @method static string aries()
 * @method static string taurus()
 * @method static string gemini()
 * @method static string cancer()
 * @method static string leo()
 * @method static string virgo()
 * @method static string libra()
 * @method static string scorpius()
 * @method static string sagittarius()
 * @method static string capricorn()
 * @method static string aquarius()
 * @method static string pisces()
 * @method static string blackSpadeSuit()
 * @method static string blackClubSuit()
 * @method static string blackHeartSuit()
 * @method static string blackDiamondSuit()
 * @method static string hotSprings()
 * @method static string blackUniversalRecyclingSymbol()
 * @method static string wheelchairSymbol()
 * @method static string hammerAndPick()
 * @method static string anchor()
 * @method static string crossedSwords()
 * @method static string scales()
 * @method static string alembic()
 * @method static string gear()
 * @method static string atomSymbol()
 * @method static string fleurDeLis()
 * @method static string warningSign()
 * @method static string highVoltageSign()
 * @method static string mediumWhiteCircle()
 * @method static string mediumBlackCircle()
 * @method static string coffin()
 * @method static string funeralUrn()
 * @method static string soccerBall()
 * @method static string baseball()
 * @method static string snowmanWithoutSnow()
 * @method static string sunBehindCloud()
 * @method static string thunderCloudAndRain()
 * @method static string ophiuchus()
 * @method static string pick()
 * @method static string helmetWithWhiteCross()
 * @method static string chains()
 * @method static string noEntry()
 * @method static string shintoShrine()
 * @method static string church()
 * @method static string mountain()
 * @method static string umbrellaOnGround()
 * @method static string fountain()
 * @method static string flagInHole()
 * @method static string ferry()
 * @method static string sailboat()
 * @method static string skier()
 * @method static string iceSkate()
 * @method static string personWithBall()
 * @method static string tent()
 * @method static string fuelPump()
 * @method static string blackScissors()
 * @method static string whiteHeavyCheckMark()
 * @method static string airplane()
 * @method static string envelope()
 * @method static string raisedFist()
 * @method static string raisedHand()
 * @method static string victoryHand()
 * @method static string writingHand()
 * @method static string pencil()
 * @method static string blackNib()
 * @method static string heavyCheckMark()
 * @method static string heavyMultiplicationX()
 * @method static string latinCross()
 * @method static string starOfDavid()
 * @method static string sparkles()
 * @method static string eightSpokedAsterisk()
 * @method static string eightPointedBlackStar()
 * @method static string snowflake()
 * @method static string sparkle()
 * @method static string crossMark()
 * @method static string negativeSquaredCrossMark()
 * @method static string blackQuestionMarkOrnament()
 * @method static string whiteQuestionMarkOrnament()
 * @method static string whiteExclamationMarkOrnament()
 * @method static string heavyExclamationMarkSymbol()
 * @method static string heavyHeartExclamationMarkOrnament()
 * @method static string heavyBlackHeart()
 * @method static string heavyPlusSign()
 * @method static string heavyMinusSign()
 * @method static string heavyDivisionSign()
 * @method static string blackRightwardsArrow()
 * @method static string curlyLoop()
 * @method static string doubleCurlyLoop()
 * @method static string arrowPointingRightwardsThenCurvingUpwards()
 * @method static string arrowPointingRightwardsThenCurvingDownwards()
 * @method static string leftwardsBlackArrow()
 * @method static string upwardsBlackArrow()
 * @method static string downwardsBlackArrow()
 * @method static string blackLargeSquare()
 * @method static string whiteLargeSquare()
 * @method static string whiteMediumStar()
 * @method static string heavyLargeCircle()
 * @method static string wavyDash()
 * @method static string partAlternationMark()
 * @method static string circledIdeographCongratulation()
 * @method static string circledIdeographSecret()
 */
class Emoji
{
    const CHARACTER_KEYCAP_NUMBER_SIGN = "\u{0023}";
    const CHARACTER_KEYCAP_ASTERISK = "\u{002A}";
    const CHARACTER_KEYCAP_DIGIT_ZERO = "\u{0030}";
    const CHARACTER_KEYCAP_DIGIT_ONE = "\u{0031}";
    const CHARACTER_KEYCAP_DIGIT_TWO = "\u{0032}";
    const CHARACTER_KEYCAP_DIGIT_THREE = "\u{0033}";
    const CHARACTER_KEYCAP_DIGIT_FOUR = "\u{0034}";
    const CHARACTER_KEYCAP_DIGIT_FIVE = "\u{0035}";
    const CHARACTER_KEYCAP_DIGIT_SIX = "\u{0036}";
    const CHARACTER_KEYCAP_DIGIT_SEVEN = "\u{0037}";
    const CHARACTER_KEYCAP_DIGIT_EIGHT = "\u{0038}";
    const CHARACTER_KEYCAP_DIGIT_NINE = "\u{0039}";
    const CHARACTER_COPYRIGHT_SIGN = "\u{00A9}";
    const CHARACTER_REGISTERED_SIGN = "\u{00AE}";
    const CHARACTER_MAHJONG_TILE_RED_DRAGON = "\u{1F004}";
    const CHARACTER_PLAYING_CARD_BLACK_JOKER = "\u{1F0CF}";
    const CHARACTER_NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_A = "\u{1F170}";
    const CHARACTER_NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_B = "\u{1F171}";
    const CHARACTER_NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_O = "\u{1F17E}";
    const CHARACTER_NEGATIVE_SQUARED_LATIN_CAPITAL_LETTER_P = "\u{1F17F}";
    const CHARACTER_NEGATIVE_SQUARED_AB = "\u{1F18E}";
    const CHARACTER_SQUARED_CL = "\u{1F191}";
    const CHARACTER_SQUARED_COOL = "\u{1F192}";
    const CHARACTER_SQUARED_FREE = "\u{1F193}";
    const CHARACTER_SQUARED_ID = "\u{1F194}";
    const CHARACTER_SQUARED_NEW = "\u{1F195}";
    const CHARACTER_SQUARED_NG = "\u{1F196}";
    const CHARACTER_SQUARED_OK = "\u{1F197}";
    const CHARACTER_SQUARED_SOS = "\u{1F198}";
    const CHARACTER_SQUARED_UP_WITH_EXCLAMATION_MARK = "\u{1F199}";
    const CHARACTER_SQUARED_VS = "\u{1F19A}";
    const CHARACTER_FLAG_FOR_ASCENSION_ISLAND = "\u{1F1E6}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_ANDORRA = "\u{1F1E6}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_UNITED_ARAB_EMIRATES = "\u{1F1E6}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_AFGHANISTAN = "\u{1F1E6}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_ANTIGUA_AND_BARBUDA = "\u{1F1E6}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_ANGUILLA = "\u{1F1E6}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_ALBANIA = "\u{1F1E6}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_ARMENIA = "\u{1F1E6}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_ANGOLA = "\u{1F1E6}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_ANTARCTICA = "\u{1F1E6}\u{1F1F6}";
    const CHARACTER_FLAG_FOR_ARGENTINA = "\u{1F1E6}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_AMERICAN_SAMOA = "\u{1F1E6}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_AUSTRIA = "\u{1F1E6}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_AUSTRALIA = "\u{1F1E6}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_ARUBA = "\u{1F1E6}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_LAND_ISLANDS = "\u{1F1E6}\u{1F1FD}";
    const CHARACTER_FLAG_FOR_AZERBAIJAN = "\u{1F1E6}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_BOSNIA_AND_HERZEGOVINA = "\u{1F1E7}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_BARBADOS = "\u{1F1E7}\u{1F1E7}";
    const CHARACTER_FLAG_FOR_BANGLADESH = "\u{1F1E7}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_BELGIUM = "\u{1F1E7}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_BURKINA_FASO = "\u{1F1E7}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_BULGARIA = "\u{1F1E7}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_BAHRAIN = "\u{1F1E7}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_BURUNDI = "\u{1F1E7}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_BENIN = "\u{1F1E7}\u{1F1EF}";
    const CHARACTER_FLAG_FOR_ST_BARTHELEMY = "\u{1F1E7}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_BERMUDA = "\u{1F1E7}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_BRUNEI = "\u{1F1E7}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_BOLIVIA = "\u{1F1E7}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_CARIBBEAN_NETHERLANDS = "\u{1F1E7}\u{1F1F6}";
    const CHARACTER_FLAG_FOR_BRAZIL = "\u{1F1E7}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_BAHAMAS = "\u{1F1E7}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_BHUTAN = "\u{1F1E7}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_BOUVET_ISLAND = "\u{1F1E7}\u{1F1FB}";
    const CHARACTER_FLAG_FOR_BOTSWANA = "\u{1F1E7}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_BELARUS = "\u{1F1E7}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_BELIZE = "\u{1F1E7}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_CANADA = "\u{1F1E8}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_COCOS_ISLANDS = "\u{1F1E8}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_CONGO_KINSHASA = "\u{1F1E8}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_CENTRAL_AFRICAN_REPUBLIC = "\u{1F1E8}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_CONGO_BRAZZAVILLE = "\u{1F1E8}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_SWITZERLAND = "\u{1F1E8}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_COTE_D_IVOIRE = "\u{1F1E8}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_COOK_ISLANDS = "\u{1F1E8}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_CHILE = "\u{1F1E8}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_CAMEROON = "\u{1F1E8}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_CHINA = "\u{1F1E8}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_COLOMBIA = "\u{1F1E8}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_CLIPPERTON_ISLAND = "\u{1F1E8}\u{1F1F5}";
    const CHARACTER_FLAG_FOR_COSTA_RICA = "\u{1F1E8}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_CUBA = "\u{1F1E8}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_CAPE_VERDE = "\u{1F1E8}\u{1F1FB}";
    const CHARACTER_FLAG_FOR_CURACAO = "\u{1F1E8}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_CHRISTMAS_ISLAND = "\u{1F1E8}\u{1F1FD}";
    const CHARACTER_FLAG_FOR_CYPRUS = "\u{1F1E8}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_CZECH_REPUBLIC = "\u{1F1E8}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_GERMANY = "\u{1F1E9}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_DIEGO_GARCIA = "\u{1F1E9}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_DJIBOUTI = "\u{1F1E9}\u{1F1EF}";
    const CHARACTER_FLAG_FOR_DENMARK = "\u{1F1E9}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_DOMINICA = "\u{1F1E9}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_DOMINICAN_REPUBLIC = "\u{1F1E9}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_ALGERIA = "\u{1F1E9}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_CEUTA_AND_MELILLA = "\u{1F1EA}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_ECUADOR = "\u{1F1EA}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_ESTONIA = "\u{1F1EA}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_EGYPT = "\u{1F1EA}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_WESTERN_SAHARA = "\u{1F1EA}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_ERITREA = "\u{1F1EA}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_SPAIN = "\u{1F1EA}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_ETHIOPIA = "\u{1F1EA}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_EUROPEAN_UNION = "\u{1F1EA}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_FINLAND = "\u{1F1EB}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_FIJI = "\u{1F1EB}\u{1F1EF}";
    const CHARACTER_FLAG_FOR_FALKLAND_ISLANDS = "\u{1F1EB}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_MICRONESIA = "\u{1F1EB}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_FAROE_ISLANDS = "\u{1F1EB}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_FRANCE = "\u{1F1EB}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_GABON = "\u{1F1EC}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_UNITED_KINGDOM = "\u{1F1EC}\u{1F1E7}";
    const CHARACTER_FLAG_FOR_GRENADA = "\u{1F1EC}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_GEORGIA = "\u{1F1EC}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_FRENCH_GUIANA = "\u{1F1EC}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_GUERNSEY = "\u{1F1EC}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_GHANA = "\u{1F1EC}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_GIBRALTAR = "\u{1F1EC}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_GREENLAND = "\u{1F1EC}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_GAMBIA = "\u{1F1EC}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_GUINEA = "\u{1F1EC}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_GUADELOUPE = "\u{1F1EC}\u{1F1F5}";
    const CHARACTER_FLAG_FOR_EQUATORIAL_GUINEA = "\u{1F1EC}\u{1F1F6}";
    const CHARACTER_FLAG_FOR_GREECE = "\u{1F1EC}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_SOUTH_GEORGIA_AND_SOUTH_SANDWICH_ISLANDS = "\u{1F1EC}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_GUATEMALA = "\u{1F1EC}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_GUAM = "\u{1F1EC}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_GUINEA_BISSAU = "\u{1F1EC}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_GUYANA = "\u{1F1EC}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_HONG_KONG = "\u{1F1ED}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_HEARD_AND_MCDONALD_ISLANDS = "\u{1F1ED}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_HONDURAS = "\u{1F1ED}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_CROATIA = "\u{1F1ED}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_HAITI = "\u{1F1ED}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_HUNGARY = "\u{1F1ED}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_CANARY_ISLANDS = "\u{1F1EE}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_INDONESIA = "\u{1F1EE}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_IRELAND = "\u{1F1EE}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_ISRAEL = "\u{1F1EE}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_ISLE_OF_MAN = "\u{1F1EE}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_INDIA = "\u{1F1EE}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_BRITISH_INDIAN_OCEAN_TERRITORY = "\u{1F1EE}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_IRAQ = "\u{1F1EE}\u{1F1F6}";
    const CHARACTER_FLAG_FOR_IRAN = "\u{1F1EE}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_ICELAND = "\u{1F1EE}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_ITALY = "\u{1F1EE}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_JERSEY = "\u{1F1EF}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_JAMAICA = "\u{1F1EF}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_JORDAN = "\u{1F1EF}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_JAPAN = "\u{1F1EF}\u{1F1F5}";
    const CHARACTER_FLAG_FOR_KENYA = "\u{1F1F0}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_KYRGYZSTAN = "\u{1F1F0}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_CAMBODIA = "\u{1F1F0}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_KIRIBATI = "\u{1F1F0}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_COMOROS = "\u{1F1F0}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_ST_KITTS_AND_NEVIS = "\u{1F1F0}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_NORTH_KOREA = "\u{1F1F0}\u{1F1F5}";
    const CHARACTER_FLAG_FOR_SOUTH_KOREA = "\u{1F1F0}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_KUWAIT = "\u{1F1F0}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_CAYMAN_ISLANDS = "\u{1F1F0}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_KAZAKHSTAN = "\u{1F1F0}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_LAOS = "\u{1F1F1}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_LEBANON = "\u{1F1F1}\u{1F1E7}";
    const CHARACTER_FLAG_FOR_ST_LUCIA = "\u{1F1F1}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_LIECHTENSTEIN = "\u{1F1F1}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_SRI_LANKA = "\u{1F1F1}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_LIBERIA = "\u{1F1F1}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_LESOTHO = "\u{1F1F1}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_LITHUANIA = "\u{1F1F1}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_LUXEMBOURG = "\u{1F1F1}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_LATVIA = "\u{1F1F1}\u{1F1FB}";
    const CHARACTER_FLAG_FOR_LIBYA = "\u{1F1F1}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_MOROCCO = "\u{1F1F2}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_MONACO = "\u{1F1F2}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_MOLDOVA = "\u{1F1F2}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_MONTENEGRO = "\u{1F1F2}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_ST_MARTIN = "\u{1F1F2}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_MADAGASCAR = "\u{1F1F2}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_MARSHALL_ISLANDS = "\u{1F1F2}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_MACEDONIA = "\u{1F1F2}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_MALI = "\u{1F1F2}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_MYANMAR = "\u{1F1F2}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_MONGOLIA = "\u{1F1F2}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_MACAU = "\u{1F1F2}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_NORTHERN_MARIANA_ISLANDS = "\u{1F1F2}\u{1F1F5}";
    const CHARACTER_FLAG_FOR_MARTINIQUE = "\u{1F1F2}\u{1F1F6}";
    const CHARACTER_FLAG_FOR_MAURITANIA = "\u{1F1F2}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_MONTSERRAT = "\u{1F1F2}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_MALTA = "\u{1F1F2}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_MAURITIUS = "\u{1F1F2}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_MALDIVES = "\u{1F1F2}\u{1F1FB}";
    const CHARACTER_FLAG_FOR_MALAWI = "\u{1F1F2}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_MEXICO = "\u{1F1F2}\u{1F1FD}";
    const CHARACTER_FLAG_FOR_MALAYSIA = "\u{1F1F2}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_MOZAMBIQUE = "\u{1F1F2}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_NAMIBIA = "\u{1F1F3}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_NEW_CALEDONIA = "\u{1F1F3}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_NIGER = "\u{1F1F3}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_NORFOLK_ISLAND = "\u{1F1F3}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_NIGERIA = "\u{1F1F3}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_NICARAGUA = "\u{1F1F3}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_NETHERLANDS = "\u{1F1F3}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_NORWAY = "\u{1F1F3}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_NEPAL = "\u{1F1F3}\u{1F1F5}";
    const CHARACTER_FLAG_FOR_NAURU = "\u{1F1F3}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_NIUE = "\u{1F1F3}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_NEW_ZEALAND = "\u{1F1F3}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_OMAN = "\u{1F1F4}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_PANAMA = "\u{1F1F5}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_PERU = "\u{1F1F5}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_FRENCH_POLYNESIA = "\u{1F1F5}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_PAPUA_NEW_GUINEA = "\u{1F1F5}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_PHILIPPINES = "\u{1F1F5}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_PAKISTAN = "\u{1F1F5}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_POLAND = "\u{1F1F5}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_ST_PIERRE_AND_MIQUELON = "\u{1F1F5}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_PITCAIRN_ISLANDS = "\u{1F1F5}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_PUERTO_RICO = "\u{1F1F5}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_PALESTINIAN_TERRITORIES = "\u{1F1F5}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_PORTUGAL = "\u{1F1F5}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_PALAU = "\u{1F1F5}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_PARAGUAY = "\u{1F1F5}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_QATAR = "\u{1F1F6}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_R_UNION = "\u{1F1F7}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_ROMANIA = "\u{1F1F7}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_SERBIA = "\u{1F1F7}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_RUSSIA = "\u{1F1F7}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_RWANDA = "\u{1F1F7}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_SAUDI_ARABIA = "\u{1F1F8}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_SOLOMON_ISLANDS = "\u{1F1F8}\u{1F1E7}";
    const CHARACTER_FLAG_FOR_SEYCHELLES = "\u{1F1F8}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_SUDAN = "\u{1F1F8}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_SWEDEN = "\u{1F1F8}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_SINGAPORE = "\u{1F1F8}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_ST_HELENA = "\u{1F1F8}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_SLOVENIA = "\u{1F1F8}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_SVALBARD_AND_JAN_MAYEN = "\u{1F1F8}\u{1F1EF}";
    const CHARACTER_FLAG_FOR_SLOVAKIA = "\u{1F1F8}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_SIERRA_LEONE = "\u{1F1F8}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_SAN_MARINO = "\u{1F1F8}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_SENEGAL = "\u{1F1F8}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_SOMALIA = "\u{1F1F8}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_SURINAME = "\u{1F1F8}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_SOUTH_SUDAN = "\u{1F1F8}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_SAO_TOME_AND_PRINCIPE = "\u{1F1F8}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_EL_SALVADOR = "\u{1F1F8}\u{1F1FB}";
    const CHARACTER_FLAG_FOR_SINT_MAARTEN = "\u{1F1F8}\u{1F1FD}";
    const CHARACTER_FLAG_FOR_SYRIA = "\u{1F1F8}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_SWAZILAND = "\u{1F1F8}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_TRISTAN_DA_CUNHA = "\u{1F1F9}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_TURKS_AND_CAICOS_ISLANDS = "\u{1F1F9}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_CHAD = "\u{1F1F9}\u{1F1E9}";
    const CHARACTER_FLAG_FOR_FRENCH_SOUTHERN_TERRITORIES = "\u{1F1F9}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_TOGO = "\u{1F1F9}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_THAILAND = "\u{1F1F9}\u{1F1ED}";
    const CHARACTER_FLAG_FOR_TAJIKISTAN = "\u{1F1F9}\u{1F1EF}";
    const CHARACTER_FLAG_FOR_TOKELAU = "\u{1F1F9}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_TIMOR_LESTE = "\u{1F1F9}\u{1F1F1}";
    const CHARACTER_FLAG_FOR_TURKMENISTAN = "\u{1F1F9}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_TUNISIA = "\u{1F1F9}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_TONGA = "\u{1F1F9}\u{1F1F4}";
    const CHARACTER_FLAG_FOR_TURKEY = "\u{1F1F9}\u{1F1F7}";
    const CHARACTER_FLAG_FOR_TRINIDAD_AND_TOBAGO = "\u{1F1F9}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_TUVALU = "\u{1F1F9}\u{1F1FB}";
    const CHARACTER_FLAG_FOR_TAIWAN = "\u{1F1F9}\u{1F1FC}";
    const CHARACTER_FLAG_FOR_TANZANIA = "\u{1F1F9}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_UKRAINE = "\u{1F1FA}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_UGANDA = "\u{1F1FA}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_US_OUTLYING_ISLANDS = "\u{1F1FA}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_UNITED_STATES = "\u{1F1FA}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_URUGUAY = "\u{1F1FA}\u{1F1FE}";
    const CHARACTER_FLAG_FOR_UZBEKISTAN = "\u{1F1FA}\u{1F1FF}";
    const CHARACTER_FLAG_FOR_VATICAN_CITY = "\u{1F1FB}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_ST_VINCENT_AND_GRENADINES = "\u{1F1FB}\u{1F1E8}";
    const CHARACTER_FLAG_FOR_VENEZUELA = "\u{1F1FB}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_BRITISH_VIRGIN_ISLANDS = "\u{1F1FB}\u{1F1EC}";
    const CHARACTER_FLAG_FOR_US_VIRGIN_ISLANDS = "\u{1F1FB}\u{1F1EE}";
    const CHARACTER_FLAG_FOR_VIETNAM = "\u{1F1FB}\u{1F1F3}";
    const CHARACTER_FLAG_FOR_VANUATU = "\u{1F1FB}\u{1F1FA}";
    const CHARACTER_FLAG_FOR_WALLIS_AND_FUTUNA = "\u{1F1FC}\u{1F1EB}";
    const CHARACTER_FLAG_FOR_SAMOA = "\u{1F1FC}\u{1F1F8}";
    const CHARACTER_FLAG_FOR_KOSOVO = "\u{1F1FD}\u{1F1F0}";
    const CHARACTER_FLAG_FOR_YEMEN = "\u{1F1FE}\u{1F1EA}";
    const CHARACTER_FLAG_FOR_MAYOTTE = "\u{1F1FE}\u{1F1F9}";
    const CHARACTER_FLAG_FOR_SOUTH_AFRICA = "\u{1F1FF}\u{1F1E6}";
    const CHARACTER_FLAG_FOR_ZAMBIA = "\u{1F1FF}\u{1F1F2}";
    const CHARACTER_FLAG_FOR_ZIMBABWE = "\u{1F1FF}\u{1F1FC}";
    const CHARACTER_SQUARED_KATAKANA_KOKO = "\u{1F201}";
    const CHARACTER_SQUARED_KATAKANA_SA = "\u{1F202}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_7121 = "\u{1F21A}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_6307 = "\u{1F22F}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_7981 = "\u{1F232}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_7A7A = "\u{1F233}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_5408 = "\u{1F234}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_6E80 = "\u{1F235}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_6709 = "\u{1F236}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_6708 = "\u{1F237}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_7533 = "\u{1F238}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_5272 = "\u{1F239}";
    const CHARACTER_SQUARED_CJK_UNIFIED_IDEOGRAPH_55B6 = "\u{1F23A}";
    const CHARACTER_CIRCLED_IDEOGRAPH_ADVANTAGE = "\u{1F250}";
    const CHARACTER_CIRCLED_IDEOGRAPH_ACCEPT = "\u{1F251}";
    const CHARACTER_CYCLONE = "\u{1F300}";
    const CHARACTER_FOGGY = "\u{1F301}";
    const CHARACTER_CLOSED_UMBRELLA = "\u{1F302}";
    const CHARACTER_NIGHT_WITH_STARS = "\u{1F303}";
    const CHARACTER_SUNRISE_OVER_MOUNTAINS = "\u{1F304}";
    const CHARACTER_SUNRISE = "\u{1F305}";
    const CHARACTER_CITYSCAPE_AT_DUSK = "\u{1F306}";
    const CHARACTER_SUNSET_OVER_BUILDINGS = "\u{1F307}";
    const CHARACTER_RAINBOW = "\u{1F308}";
    const CHARACTER_BRIDGE_AT_NIGHT = "\u{1F309}";
    const CHARACTER_WATER_WAVE = "\u{1F30A}";
    const CHARACTER_VOLCANO = "\u{1F30B}";
    const CHARACTER_MILKY_WAY = "\u{1F30C}";
    const CHARACTER_EARTH_GLOBE_EUROPE_AFRICA = "\u{1F30D}";
    const CHARACTER_EARTH_GLOBE_AMERICAS = "\u{1F30E}";
    const CHARACTER_EARTH_GLOBE_ASIA_AUSTRALIA = "\u{1F30F}";
    const CHARACTER_GLOBE_WITH_MERIDIANS = "\u{1F310}";
    const CHARACTER_NEW_MOON_SYMBOL = "\u{1F311}";
    const CHARACTER_WAXING_CRESCENT_MOON_SYMBOL = "\u{1F312}";
    const CHARACTER_FIRST_QUARTER_MOON_SYMBOL = "\u{1F313}";
    const CHARACTER_WAXING_GIBBOUS_MOON_SYMBOL = "\u{1F314}";
    const CHARACTER_FULL_MOON_SYMBOL = "\u{1F315}";
    const CHARACTER_WANING_GIBBOUS_MOON_SYMBOL = "\u{1F316}";
    const CHARACTER_LAST_QUARTER_MOON_SYMBOL = "\u{1F317}";
    const CHARACTER_WANING_CRESCENT_MOON_SYMBOL = "\u{1F318}";
    const CHARACTER_CRESCENT_MOON = "\u{1F319}";
    const CHARACTER_NEW_MOON_WITH_FACE = "\u{1F31A}";
    const CHARACTER_FIRST_QUARTER_MOON_WITH_FACE = "\u{1F31B}";
    const CHARACTER_LAST_QUARTER_MOON_WITH_FACE = "\u{1F31C}";
    const CHARACTER_FULL_MOON_WITH_FACE = "\u{1F31D}";
    const CHARACTER_SUN_WITH_FACE = "\u{1F31E}";
    const CHARACTER_GLOWING_STAR = "\u{1F31F}";
    const CHARACTER_SHOOTING_STAR = "\u{1F320}";
    const CHARACTER_THERMOMETER = "\u{1F321}";
    const CHARACTER_WHITE_SUN_WITH_SMALL_CLOUD = "\u{1F324}";
    const CHARACTER_WHITE_SUN_BEHIND_CLOUD = "\u{1F325}";
    const CHARACTER_WHITE_SUN_BEHIND_CLOUD_WITH_RAIN = "\u{1F326}";
    const CHARACTER_CLOUD_WITH_RAIN = "\u{1F327}";
    const CHARACTER_CLOUD_WITH_SNOW = "\u{1F328}";
    const CHARACTER_CLOUD_WITH_LIGHTNING = "\u{1F329}";
    const CHARACTER_CLOUD_WITH_TORNADO = "\u{1F32A}";
    const CHARACTER_FOG = "\u{1F32B}";
    const CHARACTER_WIND_BLOWING_FACE = "\u{1F32C}";
    const CHARACTER_HOT_DOG = "\u{1F32D}";
    const CHARACTER_TACO = "\u{1F32E}";
    const CHARACTER_BURRITO = "\u{1F32F}";
    const CHARACTER_CHESTNUT = "\u{1F330}";
    const CHARACTER_SEEDLING = "\u{1F331}";
    const CHARACTER_EVERGREEN_TREE = "\u{1F332}";
    const CHARACTER_DECIDUOUS_TREE = "\u{1F333}";
    const CHARACTER_PALM_TREE = "\u{1F334}";
    const CHARACTER_CACTUS = "\u{1F335}";
    const CHARACTER_HOT_PEPPER = "\u{1F336}";
    const CHARACTER_TULIP = "\u{1F337}";
    const CHARACTER_CHERRY_BLOSSOM = "\u{1F338}";
    const CHARACTER_ROSE = "\u{1F339}";
    const CHARACTER_HIBISCUS = "\u{1F33A}";
    const CHARACTER_SUNFLOWER = "\u{1F33B}";
    const CHARACTER_BLOSSOM = "\u{1F33C}";
    const CHARACTER_EAR_OF_MAIZE = "\u{1F33D}";
    const CHARACTER_EAR_OF_RICE = "\u{1F33E}";
    const CHARACTER_HERB = "\u{1F33F}";
    const CHARACTER_FOUR_LEAF_CLOVER = "\u{1F340}";
    const CHARACTER_MAPLE_LEAF = "\u{1F341}";
    const CHARACTER_FALLEN_LEAF = "\u{1F342}";
    const CHARACTER_LEAF_FLUTTERING_IN_WIND = "\u{1F343}";
    const CHARACTER_MUSHROOM = "\u{1F344}";
    const CHARACTER_TOMATO = "\u{1F345}";
    const CHARACTER_AUBERGINE = "\u{1F346}";
    const CHARACTER_GRAPES = "\u{1F347}";
    const CHARACTER_MELON = "\u{1F348}";
    const CHARACTER_WATERMELON = "\u{1F349}";
    const CHARACTER_TANGERINE = "\u{1F34A}";
    const CHARACTER_LEMON = "\u{1F34B}";
    const CHARACTER_BANANA = "\u{1F34C}";
    const CHARACTER_PINEAPPLE = "\u{1F34D}";
    const CHARACTER_RED_APPLE = "\u{1F34E}";
    const CHARACTER_GREEN_APPLE = "\u{1F34F}";
    const CHARACTER_PEAR = "\u{1F350}";
    const CHARACTER_PEACH = "\u{1F351}";
    const CHARACTER_CHERRIES = "\u{1F352}";
    const CHARACTER_STRAWBERRY = "\u{1F353}";
    const CHARACTER_HAMBURGER = "\u{1F354}";
    const CHARACTER_SLICE_OF_PIZZA = "\u{1F355}";
    const CHARACTER_MEAT_ON_BONE = "\u{1F356}";
    const CHARACTER_POULTRY_LEG = "\u{1F357}";
    const CHARACTER_RICE_CRACKER = "\u{1F358}";
    const CHARACTER_RICE_BALL = "\u{1F359}";
    const CHARACTER_COOKED_RICE = "\u{1F35A}";
    const CHARACTER_CURRY_AND_RICE = "\u{1F35B}";
    const CHARACTER_STEAMING_BOWL = "\u{1F35C}";
    const CHARACTER_SPAGHETTI = "\u{1F35D}";
    const CHARACTER_BREAD = "\u{1F35E}";
    const CHARACTER_FRENCH_FRIES = "\u{1F35F}";
    const CHARACTER_ROASTED_SWEET_POTATO = "\u{1F360}";
    const CHARACTER_DANGO = "\u{1F361}";
    const CHARACTER_ODEN = "\u{1F362}";
    const CHARACTER_SUSHI = "\u{1F363}";
    const CHARACTER_FRIED_SHRIMP = "\u{1F364}";
    const CHARACTER_FISH_CAKE_WITH_SWIRL_DESIGN = "\u{1F365}";
    const CHARACTER_SOFT_ICE_CREAM = "\u{1F366}";
    const CHARACTER_SHAVED_ICE = "\u{1F367}";
    const CHARACTER_ICE_CREAM = "\u{1F368}";
    const CHARACTER_DOUGHNUT = "\u{1F369}";
    const CHARACTER_COOKIE = "\u{1F36A}";
    const CHARACTER_CHOCOLATE_BAR = "\u{1F36B}";
    const CHARACTER_CANDY = "\u{1F36C}";
    const CHARACTER_LOLLIPOP = "\u{1F36D}";
    const CHARACTER_CUSTARD = "\u{1F36E}";
    const CHARACTER_HONEY_POT = "\u{1F36F}";
    const CHARACTER_SHORTCAKE = "\u{1F370}";
    const CHARACTER_BENTO_BOX = "\u{1F371}";
    const CHARACTER_POT_OF_FOOD = "\u{1F372}";
    const CHARACTER_COOKING = "\u{1F373}";
    const CHARACTER_FORK_AND_KNIFE = "\u{1F374}";
    const CHARACTER_TEACUP_WITHOUT_HANDLE = "\u{1F375}";
    const CHARACTER_SAKE_BOTTLE_AND_CUP = "\u{1F376}";
    const CHARACTER_WINE_GLASS = "\u{1F377}";
    const CHARACTER_COCKTAIL_GLASS = "\u{1F378}";
    const CHARACTER_TROPICAL_DRINK = "\u{1F379}";
    const CHARACTER_BEER_MUG = "\u{1F37A}";
    const CHARACTER_CLINKING_BEER_MUGS = "\u{1F37B}";
    const CHARACTER_BABY_BOTTLE = "\u{1F37C}";
    const CHARACTER_FORK_AND_KNIFE_WITH_PLATE = "\u{1F37D}";
    const CHARACTER_BOTTLE_WITH_POPPING_CORK = "\u{1F37E}";
    const CHARACTER_POPCORN = "\u{1F37F}";
    const CHARACTER_RIBBON = "\u{1F380}";
    const CHARACTER_WRAPPED_PRESENT = "\u{1F381}";
    const CHARACTER_BIRTHDAY_CAKE = "\u{1F382}";
    const CHARACTER_JACK_O_LANTERN = "\u{1F383}";
    const CHARACTER_CHRISTMAS_TREE = "\u{1F384}";
    const CHARACTER_FATHER_CHRISTMAS = "\u{1F385}";
    const CHARACTER_FIREWORKS = "\u{1F386}";
    const CHARACTER_FIREWORK_SPARKLER = "\u{1F387}";
    const CHARACTER_BALLOON = "\u{1F388}";
    const CHARACTER_PARTY_POPPER = "\u{1F389}";
    const CHARACTER_CONFETTI_BALL = "\u{1F38A}";
    const CHARACTER_TANABATA_TREE = "\u{1F38B}";
    const CHARACTER_CROSSED_FLAGS = "\u{1F38C}";
    const CHARACTER_PINE_DECORATION = "\u{1F38D}";
    const CHARACTER_JAPANESE_DOLLS = "\u{1F38E}";
    const CHARACTER_CARP_STREAMER = "\u{1F38F}";
    const CHARACTER_WIND_CHIME = "\u{1F390}";
    const CHARACTER_MOON_VIEWING_CEREMONY = "\u{1F391}";
    const CHARACTER_SCHOOL_SATCHEL = "\u{1F392}";
    const CHARACTER_GRADUATION_CAP = "\u{1F393}";
    const CHARACTER_MILITARY_MEDAL = "\u{1F396}";
    const CHARACTER_REMINDER_RIBBON = "\u{1F397}";
    const CHARACTER_STUDIO_MICROPHONE = "\u{1F399}";
    const CHARACTER_LEVEL_SLIDER = "\u{1F39A}";
    const CHARACTER_CONTROL_KNOBS = "\u{1F39B}";
    const CHARACTER_FILM_FRAMES = "\u{1F39E}";
    const CHARACTER_ADMISSION_TICKETS = "\u{1F39F}";
    const CHARACTER_CAROUSEL_HORSE = "\u{1F3A0}";
    const CHARACTER_FERRIS_WHEEL = "\u{1F3A1}";
    const CHARACTER_ROLLER_COASTER = "\u{1F3A2}";
    const CHARACTER_FISHING_POLE_AND_FISH = "\u{1F3A3}";
    const CHARACTER_MICROPHONE = "\u{1F3A4}";
    const CHARACTER_MOVIE_CAMERA = "\u{1F3A5}";
    const CHARACTER_CINEMA = "\u{1F3A6}";
    const CHARACTER_HEADPHONE = "\u{1F3A7}";
    const CHARACTER_ARTIST_PALETTE = "\u{1F3A8}";
    const CHARACTER_TOP_HAT = "\u{1F3A9}";
    const CHARACTER_CIRCUS_TENT = "\u{1F3AA}";
    const CHARACTER_TICKET = "\u{1F3AB}";
    const CHARACTER_CLAPPER_BOARD = "\u{1F3AC}";
    const CHARACTER_PERFORMING_ARTS = "\u{1F3AD}";
    const CHARACTER_VIDEO_GAME = "\u{1F3AE}";
    const CHARACTER_DIRECT_HIT = "\u{1F3AF}";
    const CHARACTER_SLOT_MACHINE = "\u{1F3B0}";
    const CHARACTER_BILLIARDS = "\u{1F3B1}";
    const CHARACTER_GAME_DIE = "\u{1F3B2}";
    const CHARACTER_BOWLING = "\u{1F3B3}";
    const CHARACTER_FLOWER_PLAYING_CARDS = "\u{1F3B4}";
    const CHARACTER_MUSICAL_NOTE = "\u{1F3B5}";
    const CHARACTER_MULTIPLE_MUSICAL_NOTES = "\u{1F3B6}";
    const CHARACTER_SAXOPHONE = "\u{1F3B7}";
    const CHARACTER_GUITAR = "\u{1F3B8}";
    const CHARACTER_MUSICAL_KEYBOARD = "\u{1F3B9}";
    const CHARACTER_TRUMPET = "\u{1F3BA}";
    const CHARACTER_VIOLIN = "\u{1F3BB}";
    const CHARACTER_MUSICAL_SCORE = "\u{1F3BC}";
    const CHARACTER_RUNNING_SHIRT_WITH_SASH = "\u{1F3BD}";
    const CHARACTER_TENNIS_RACQUET_AND_BALL = "\u{1F3BE}";
    const CHARACTER_SKI_AND_SKI_BOOT = "\u{1F3BF}";
    const CHARACTER_BASKETBALL_AND_HOOP = "\u{1F3C0}";
    const CHARACTER_CHEQUERED_FLAG = "\u{1F3C1}";
    const CHARACTER_SNOWBOARDER = "\u{1F3C2}";
    const CHARACTER_RUNNER = "\u{1F3C3}";
    const CHARACTER_SURFER = "\u{1F3C4}";
    const CHARACTER_SPORTS_MEDAL = "\u{1F3C5}";
    const CHARACTER_TROPHY = "\u{1F3C6}";
    const CHARACTER_HORSE_RACING = "\u{1F3C7}";
    const CHARACTER_AMERICAN_FOOTBALL = "\u{1F3C8}";
    const CHARACTER_RUGBY_FOOTBALL = "\u{1F3C9}";
    const CHARACTER_SWIMMER = "\u{1F3CA}";
    const CHARACTER_WEIGHT_LIFTER = "\u{1F3CB}";
    const CHARACTER_GOLFER = "\u{1F3CC}";
    const CHARACTER_RACING_MOTORCYCLE = "\u{1F3CD}";
    const CHARACTER_RACING_CAR = "\u{1F3CE}";
    const CHARACTER_CRICKET_BAT_AND_BALL = "\u{1F3CF}";
    const CHARACTER_VOLLEYBALL = "\u{1F3D0}";
    const CHARACTER_FIELD_HOCKEY_STICK_AND_BALL = "\u{1F3D1}";
    const CHARACTER_ICE_HOCKEY_STICK_AND_PUCK = "\u{1F3D2}";
    const CHARACTER_TABLE_TENNIS_PADDLE_AND_BALL = "\u{1F3D3}";
    const CHARACTER_SNOW_CAPPED_MOUNTAIN = "\u{1F3D4}";
    const CHARACTER_CAMPING = "\u{1F3D5}";
    const CHARACTER_BEACH_WITH_UMBRELLA = "\u{1F3D6}";
    const CHARACTER_BUILDING_CONSTRUCTION = "\u{1F3D7}";
    const CHARACTER_HOUSE_BUILDINGS = "\u{1F3D8}";
    const CHARACTER_CITYSCAPE = "\u{1F3D9}";
    const CHARACTER_DERELICT_HOUSE_BUILDING = "\u{1F3DA}";
    const CHARACTER_CLASSICAL_BUILDING = "\u{1F3DB}";
    const CHARACTER_DESERT = "\u{1F3DC}";
    const CHARACTER_DESERT_ISLAND = "\u{1F3DD}";
    const CHARACTER_NATIONAL_PARK = "\u{1F3DE}";
    const CHARACTER_STADIUM = "\u{1F3DF}";
    const CHARACTER_HOUSE_BUILDING = "\u{1F3E0}";
    const CHARACTER_HOUSE_WITH_GARDEN = "\u{1F3E1}";
    const CHARACTER_OFFICE_BUILDING = "\u{1F3E2}";
    const CHARACTER_JAPANESE_POST_OFFICE = "\u{1F3E3}";
    const CHARACTER_EUROPEAN_POST_OFFICE = "\u{1F3E4}";
    const CHARACTER_HOSPITAL = "\u{1F3E5}";
    const CHARACTER_BANK = "\u{1F3E6}";
    const CHARACTER_AUTOMATED_TELLER_MACHINE = "\u{1F3E7}";
    const CHARACTER_HOTEL = "\u{1F3E8}";
    const CHARACTER_LOVE_HOTEL = "\u{1F3E9}";
    const CHARACTER_CONVENIENCE_STORE = "\u{1F3EA}";
    const CHARACTER_SCHOOL = "\u{1F3EB}";
    const CHARACTER_DEPARTMENT_STORE = "\u{1F3EC}";
    const CHARACTER_FACTORY = "\u{1F3ED}";
    const CHARACTER_IZAKAYA_LANTERN = "\u{1F3EE}";
    const CHARACTER_JAPANESE_CASTLE = "\u{1F3EF}";
    const CHARACTER_EUROPEAN_CASTLE = "\u{1F3F0}";
    const CHARACTER_WAVING_WHITE_FLAG = "\u{1F3F3}";
    const CHARACTER_WAVING_BLACK_FLAG = "\u{1F3F4}";
    const CHARACTER_ROSETTE = "\u{1F3F5}";
    const CHARACTER_LABEL = "\u{1F3F7}";
    const CHARACTER_BADMINTON_RACQUET_AND_SHUTTLECOCK = "\u{1F3F8}";
    const CHARACTER_BOW_AND_ARROW = "\u{1F3F9}";
    const CHARACTER_AMPHORA = "\u{1F3FA}";
    const CHARACTER_EMOJI_MODIFIER_FITZPATRICK_TYPE12 = "\u{1F3FB}";
    const CHARACTER_EMOJI_MODIFIER_FITZPATRICK_TYPE3 = "\u{1F3FC}";
    const CHARACTER_EMOJI_MODIFIER_FITZPATRICK_TYPE4 = "\u{1F3FD}";
    const CHARACTER_EMOJI_MODIFIER_FITZPATRICK_TYPE5 = "\u{1F3FE}";
    const CHARACTER_EMOJI_MODIFIER_FITZPATRICK_TYPE6 = "\u{1F3FF}";
    const CHARACTER_RAT = "\u{1F400}";
    const CHARACTER_MOUSE = "\u{1F401}";
    const CHARACTER_OX = "\u{1F402}";
    const CHARACTER_WATER_BUFFALO = "\u{1F403}";
    const CHARACTER_COW = "\u{1F404}";
    const CHARACTER_TIGER = "\u{1F405}";
    const CHARACTER_LEOPARD = "\u{1F406}";
    const CHARACTER_RABBIT = "\u{1F407}";
    const CHARACTER_CAT = "\u{1F408}";
    const CHARACTER_DRAGON = "\u{1F409}";
    const CHARACTER_CROCODILE = "\u{1F40A}";
    const CHARACTER_WHALE = "\u{1F40B}";
    const CHARACTER_SNAIL = "\u{1F40C}";
    const CHARACTER_SNAKE = "\u{1F40D}";
    const CHARACTER_HORSE = "\u{1F40E}";
    const CHARACTER_RAM = "\u{1F40F}";
    const CHARACTER_GOAT = "\u{1F410}";
    const CHARACTER_SHEEP = "\u{1F411}";
    const CHARACTER_MONKEY = "\u{1F412}";
    const CHARACTER_ROOSTER = "\u{1F413}";
    const CHARACTER_CHICKEN = "\u{1F414}";
    const CHARACTER_DOG = "\u{1F415}";
    const CHARACTER_PIG = "\u{1F416}";
    const CHARACTER_BOAR = "\u{1F417}";
    const CHARACTER_ELEPHANT = "\u{1F418}";
    const CHARACTER_OCTOPUS = "\u{1F419}";
    const CHARACTER_SPIRAL_SHELL = "\u{1F41A}";
    const CHARACTER_BUG = "\u{1F41B}";
    const CHARACTER_ANT = "\u{1F41C}";
    const CHARACTER_HONEYBEE = "\u{1F41D}";
    const CHARACTER_LADY_BEETLE = "\u{1F41E}";
    const CHARACTER_FISH = "\u{1F41F}";
    const CHARACTER_TROPICAL_FISH = "\u{1F420}";
    const CHARACTER_BLOWFISH = "\u{1F421}";
    const CHARACTER_TURTLE = "\u{1F422}";
    const CHARACTER_HATCHING_CHICK = "\u{1F423}";
    const CHARACTER_BABY_CHICK = "\u{1F424}";
    const CHARACTER_FRONT_FACING_BABY_CHICK = "\u{1F425}";
    const CHARACTER_BIRD = "\u{1F426}";
    const CHARACTER_PENGUIN = "\u{1F427}";
    const CHARACTER_KOALA = "\u{1F428}";
    const CHARACTER_POODLE = "\u{1F429}";
    const CHARACTER_DROMEDARY_CAMEL = "\u{1F42A}";
    const CHARACTER_BACTRIAN_CAMEL = "\u{1F42B}";
    const CHARACTER_DOLPHIN = "\u{1F42C}";
    const CHARACTER_MOUSE_FACE = "\u{1F42D}";
    const CHARACTER_COW_FACE = "\u{1F42E}";
    const CHARACTER_TIGER_FACE = "\u{1F42F}";
    const CHARACTER_RABBIT_FACE = "\u{1F430}";
    const CHARACTER_CAT_FACE = "\u{1F431}";
    const CHARACTER_DRAGON_FACE = "\u{1F432}";
    const CHARACTER_SPOUTING_WHALE = "\u{1F433}";
    const CHARACTER_HORSE_FACE = "\u{1F434}";
    const CHARACTER_MONKEY_FACE = "\u{1F435}";
    const CHARACTER_DOG_FACE = "\u{1F436}";
    const CHARACTER_PIG_FACE = "\u{1F437}";
    const CHARACTER_FROG_FACE = "\u{1F438}";
    const CHARACTER_HAMSTER_FACE = "\u{1F439}";
    const CHARACTER_WOLF_FACE = "\u{1F43A}";
    const CHARACTER_BEAR_FACE = "\u{1F43B}";
    const CHARACTER_PANDA_FACE = "\u{1F43C}";
    const CHARACTER_PIG_NOSE = "\u{1F43D}";
    const CHARACTER_PAW_PRINTS = "\u{1F43E}";
    const CHARACTER_CHIPMUNK = "\u{1F43F}";
    const CHARACTER_EYES = "\u{1F440}";
    const CHARACTER_EYE = "\u{1F441}";
    const CHARACTER_EAR = "\u{1F442}";
    const CHARACTER_NOSE = "\u{1F443}";
    const CHARACTER_MOUTH = "\u{1F444}";
    const CHARACTER_TONGUE = "\u{1F445}";
    const CHARACTER_WHITE_UP_POINTING_BACKHAND_INDEX = "\u{1F446}";
    const CHARACTER_WHITE_DOWN_POINTING_BACKHAND_INDEX = "\u{1F447}";
    const CHARACTER_WHITE_LEFT_POINTING_BACKHAND_INDEX = "\u{1F448}";
    const CHARACTER_WHITE_RIGHT_POINTING_BACKHAND_INDEX = "\u{1F449}";
    const CHARACTER_FISTED_HAND_SIGN = "\u{1F44A}";
    const CHARACTER_WAVING_HAND_SIGN = "\u{1F44B}";
    const CHARACTER_OK_HAND_SIGN = "\u{1F44C}";
    const CHARACTER_THUMBS_UP_SIGN = "\u{1F44D}";
    const CHARACTER_THUMBS_DOWN_SIGN = "\u{1F44E}";
    const CHARACTER_CLAPPING_HANDS_SIGN = "\u{1F44F}";
    const CHARACTER_OPEN_HANDS_SIGN = "\u{1F450}";
    const CHARACTER_CROWN = "\u{1F451}";
    const CHARACTER_WOMANS_HAT = "\u{1F452}";
    const CHARACTER_EYEGLASSES = "\u{1F453}";
    const CHARACTER_NECKTIE = "\u{1F454}";
    const CHARACTER_T_SHIRT = "\u{1F455}";
    const CHARACTER_JEANS = "\u{1F456}";
    const CHARACTER_DRESS = "\u{1F457}";
    const CHARACTER_KIMONO = "\u{1F458}";
    const CHARACTER_BIKINI = "\u{1F459}";
    const CHARACTER_WOMANS_CLOTHES = "\u{1F45A}";
    const CHARACTER_PURSE = "\u{1F45B}";
    const CHARACTER_HANDBAG = "\u{1F45C}";
    const CHARACTER_POUCH = "\u{1F45D}";
    const CHARACTER_MANS_SHOE = "\u{1F45E}";
    const CHARACTER_ATHLETIC_SHOE = "\u{1F45F}";
    const CHARACTER_HIGH_HEELED_SHOE = "\u{1F460}";
    const CHARACTER_WOMANS_SANDAL = "\u{1F461}";
    const CHARACTER_WOMANS_BOOTS = "\u{1F462}";
    const CHARACTER_FOOTPRINTS = "\u{1F463}";
    const CHARACTER_BUST_IN_SILHOUETTE = "\u{1F464}";
    const CHARACTER_BUSTS_IN_SILHOUETTE = "\u{1F465}";
    const CHARACTER_BOY = "\u{1F466}";
    const CHARACTER_GIRL = "\u{1F467}";
    const CHARACTER_MAN = "\u{1F468}";
    const CHARACTER_FAMILY_MAN = "\u{1F468}";
    const CHARACTER_COUPLE_WITH_HEART_MAN = "\u{1F468}";
    const CHARACTER_KISS_MAN = "\u{1F468}";
    const CHARACTER_WOMAN = "\u{1F469}";
    const CHARACTER_FAMILY_WOMAN = "\u{1F469}";
    const CHARACTER_COUPLE_WITH_HEART_WOMAN = "\u{1F469}";
    const CHARACTER_KISS_WOMAN = "\u{1F469}";
    const CHARACTER_FAMILY = "\u{1F46A}";
    const CHARACTER_MAN_AND_WOMAN_HOLDING_HANDS = "\u{1F46B}";
    const CHARACTER_TWO_MEN_HOLDING_HANDS = "\u{1F46C}";
    const CHARACTER_TWO_WOMEN_HOLDING_HANDS = "\u{1F46D}";
    const CHARACTER_POLICE_OFFICER = "\u{1F46E}";
    const CHARACTER_WOMAN_WITH_BUNNY_EARS = "\u{1F46F}";
    const CHARACTER_BRIDE_WITH_VEIL = "\u{1F470}";
    const CHARACTER_PERSON_WITH_BLOND_HAIR = "\u{1F471}";
    const CHARACTER_MAN_WITH_GUA_PI_MAO = "\u{1F472}";
    const CHARACTER_MAN_WITH_TURBAN = "\u{1F473}";
    const CHARACTER_OLDER_MAN = "\u{1F474}";
    const CHARACTER_OLDER_WOMAN = "\u{1F475}";
    const CHARACTER_BABY = "\u{1F476}";
    const CHARACTER_CONSTRUCTION_WORKER = "\u{1F477}";
    const CHARACTER_PRINCESS = "\u{1F478}";
    const CHARACTER_JAPANESE_OGRE = "\u{1F479}";
    const CHARACTER_JAPANESE_GOBLIN = "\u{1F47A}";
    const CHARACTER_GHOST = "\u{1F47B}";
    const CHARACTER_BABY_ANGEL = "\u{1F47C}";
    const CHARACTER_EXTRATERRESTRIAL_ALIEN = "\u{1F47D}";
    const CHARACTER_ALIEN_MONSTER = "\u{1F47E}";
    const CHARACTER_IMP = "\u{1F47F}";
    const CHARACTER_SKULL = "\u{1F480}";
    const CHARACTER_INFORMATION_DESK_PERSON = "\u{1F481}";
    const CHARACTER_GUARDSMAN = "\u{1F482}";
    const CHARACTER_DANCER = "\u{1F483}";
    const CHARACTER_LIPSTICK = "\u{1F484}";
    const CHARACTER_NAIL_POLISH = "\u{1F485}";
    const CHARACTER_FACE_MASSAGE = "\u{1F486}";
    const CHARACTER_HAIRCUT = "\u{1F487}";
    const CHARACTER_BARBER_POLE = "\u{1F488}";
    const CHARACTER_SYRINGE = "\u{1F489}";
    const CHARACTER_PILL = "\u{1F48A}";
    const CHARACTER_KISS_MARK = "\u{1F48B}";
    const CHARACTER_LOVE_LETTER = "\u{1F48C}";
    const CHARACTER_RING = "\u{1F48D}";
    const CHARACTER_GEM_STONE = "\u{1F48E}";
    const CHARACTER_BOUQUET = "\u{1F490}";
    const CHARACTER_WEDDING = "\u{1F492}";
    const CHARACTER_BEATING_HEART = "\u{1F493}";
    const CHARACTER_BROKEN_HEART = "\u{1F494}";
    const CHARACTER_TWO_HEARTS = "\u{1F495}";
    const CHARACTER_SPARKLING_HEART = "\u{1F496}";
    const CHARACTER_GROWING_HEART = "\u{1F497}";
    const CHARACTER_HEART_WITH_ARROW = "\u{1F498}";
    const CHARACTER_BLUE_HEART = "\u{1F499}";
    const CHARACTER_GREEN_HEART = "\u{1F49A}";
    const CHARACTER_YELLOW_HEART = "\u{1F49B}";
    const CHARACTER_PURPLE_HEART = "\u{1F49C}";
    const CHARACTER_HEART_WITH_RIBBON = "\u{1F49D}";
    const CHARACTER_REVOLVING_HEARTS = "\u{1F49E}";
    const CHARACTER_HEART_DECORATION = "\u{1F49F}";
    const CHARACTER_DIAMOND_SHAPE_WITH_A_DOT_INSIDE = "\u{1F4A0}";
    const CHARACTER_ELECTRIC_LIGHT_BULB = "\u{1F4A1}";
    const CHARACTER_ANGER_SYMBOL = "\u{1F4A2}";
    const CHARACTER_BOMB = "\u{1F4A3}";
    const CHARACTER_SLEEPING_SYMBOL = "\u{1F4A4}";
    const CHARACTER_COLLISION_SYMBOL = "\u{1F4A5}";
    const CHARACTER_SPLASHING_SWEAT_SYMBOL = "\u{1F4A6}";
    const CHARACTER_DROPLET = "\u{1F4A7}";
    const CHARACTER_DASH_SYMBOL = "\u{1F4A8}";
    const CHARACTER_PILE_OF_POO = "\u{1F4A9}";
    const CHARACTER_FLEXED_BICEPS = "\u{1F4AA}";
    const CHARACTER_DIZZY_SYMBOL = "\u{1F4AB}";
    const CHARACTER_SPEECH_BALLOON = "\u{1F4AC}";
    const CHARACTER_THOUGHT_BALLOON = "\u{1F4AD}";
    const CHARACTER_WHITE_FLOWER = "\u{1F4AE}";
    const CHARACTER_HUNDRED_POINTS_SYMBOL = "\u{1F4AF}";
    const CHARACTER_MONEY_BAG = "\u{1F4B0}";
    const CHARACTER_CURRENCY_EXCHANGE = "\u{1F4B1}";
    const CHARACTER_HEAVY_DOLLAR_SIGN = "\u{1F4B2}";
    const CHARACTER_CREDIT_CARD = "\u{1F4B3}";
    const CHARACTER_BANKNOTE_WITH_YEN_SIGN = "\u{1F4B4}";
    const CHARACTER_BANKNOTE_WITH_DOLLAR_SIGN = "\u{1F4B5}";
    const CHARACTER_BANKNOTE_WITH_EURO_SIGN = "\u{1F4B6}";
    const CHARACTER_BANKNOTE_WITH_POUND_SIGN = "\u{1F4B7}";
    const CHARACTER_MONEY_WITH_WINGS = "\u{1F4B8}";
    const CHARACTER_CHART_WITH_UPWARDS_TREND_AND_YEN_SIGN = "\u{1F4B9}";
    const CHARACTER_SEAT = "\u{1F4BA}";
    const CHARACTER_PERSONAL_COMPUTER = "\u{1F4BB}";
    const CHARACTER_BRIEFCASE = "\u{1F4BC}";
    const CHARACTER_MINIDISC = "\u{1F4BD}";
    const CHARACTER_FLOPPY_DISK = "\u{1F4BE}";
    const CHARACTER_OPTICAL_DISC = "\u{1F4BF}";
    const CHARACTER_DVD = "\u{1F4C0}";
    const CHARACTER_FILE_FOLDER = "\u{1F4C1}";
    const CHARACTER_OPEN_FILE_FOLDER = "\u{1F4C2}";
    const CHARACTER_PAGE_WITH_CURL = "\u{1F4C3}";
    const CHARACTER_PAGE_FACING_UP = "\u{1F4C4}";
    const CHARACTER_CALENDAR = "\u{1F4C5}";
    const CHARACTER_TEAR_OFF_CALENDAR = "\u{1F4C6}";
    const CHARACTER_CARD_INDEX = "\u{1F4C7}";
    const CHARACTER_CHART_WITH_UPWARDS_TREND = "\u{1F4C8}";
    const CHARACTER_CHART_WITH_DOWNWARDS_TREND = "\u{1F4C9}";
    const CHARACTER_BAR_CHART = "\u{1F4CA}";
    const CHARACTER_CLIPBOARD = "\u{1F4CB}";
    const CHARACTER_PUSHPIN = "\u{1F4CC}";
    const CHARACTER_ROUND_PUSHPIN = "\u{1F4CD}";
    const CHARACTER_PAPERCLIP = "\u{1F4CE}";
    const CHARACTER_STRAIGHT_RULER = "\u{1F4CF}";
    const CHARACTER_TRIANGULAR_RULER = "\u{1F4D0}";
    const CHARACTER_BOOKMARK_TABS = "\u{1F4D1}";
    const CHARACTER_LEDGER = "\u{1F4D2}";
    const CHARACTER_NOTEBOOK = "\u{1F4D3}";
    const CHARACTER_NOTEBOOK_WITH_DECORATIVE_COVER = "\u{1F4D4}";
    const CHARACTER_CLOSED_BOOK = "\u{1F4D5}";
    const CHARACTER_OPEN_BOOK = "\u{1F4D6}";
    const CHARACTER_GREEN_BOOK = "\u{1F4D7}";
    const CHARACTER_BLUE_BOOK = "\u{1F4D8}";
    const CHARACTER_ORANGE_BOOK = "\u{1F4D9}";
    const CHARACTER_BOOKS = "\u{1F4DA}";
    const CHARACTER_NAME_BADGE = "\u{1F4DB}";
    const CHARACTER_SCROLL = "\u{1F4DC}";
    const CHARACTER_MEMO = "\u{1F4DD}";
    const CHARACTER_TELEPHONE_RECEIVER = "\u{1F4DE}";
    const CHARACTER_PAGER = "\u{1F4DF}";
    const CHARACTER_FAX_MACHINE = "\u{1F4E0}";
    const CHARACTER_SATELLITE_ANTENNA = "\u{1F4E1}";
    const CHARACTER_PUBLIC_ADDRESS_LOUDSPEAKER = "\u{1F4E2}";
    const CHARACTER_CHEERING_MEGAPHONE = "\u{1F4E3}";
    const CHARACTER_OUTBOX_TRAY = "\u{1F4E4}";
    const CHARACTER_INBOX_TRAY = "\u{1F4E5}";
    const CHARACTER_PACKAGE = "\u{1F4E6}";
    const CHARACTER_E_MAIL_SYMBOL = "\u{1F4E7}";
    const CHARACTER_INCOMING_ENVELOPE = "\u{1F4E8}";
    const CHARACTER_ENVELOPE_WITH_DOWNWARDS_ARROW_ABOVE = "\u{1F4E9}";
    const CHARACTER_CLOSED_MAILBOX_WITH_LOWERED_FLAG = "\u{1F4EA}";
    const CHARACTER_CLOSED_MAILBOX_WITH_RAISED_FLAG = "\u{1F4EB}";
    const CHARACTER_OPEN_MAILBOX_WITH_RAISED_FLAG = "\u{1F4EC}";
    const CHARACTER_OPEN_MAILBOX_WITH_LOWERED_FLAG = "\u{1F4ED}";
    const CHARACTER_POSTBOX = "\u{1F4EE}";
    const CHARACTER_POSTAL_HORN = "\u{1F4EF}";
    const CHARACTER_NEWSPAPER = "\u{1F4F0}";
    const CHARACTER_MOBILE_PHONE = "\u{1F4F1}";
    const CHARACTER_MOBILE_PHONE_WITH_RIGHTWARDS_ARROW_AT_LEFT = "\u{1F4F2}";
    const CHARACTER_VIBRATION_MODE = "\u{1F4F3}";
    const CHARACTER_MOBILE_PHONE_OFF = "\u{1F4F4}";
    const CHARACTER_NO_MOBILE_PHONES = "\u{1F4F5}";
    const CHARACTER_ANTENNA_WITH_BARS = "\u{1F4F6}";
    const CHARACTER_CAMERA = "\u{1F4F7}";
    const CHARACTER_CAMERA_WITH_FLASH = "\u{1F4F8}";
    const CHARACTER_VIDEO_CAMERA = "\u{1F4F9}";
    const CHARACTER_TELEVISION = "\u{1F4FA}";
    const CHARACTER_RADIO = "\u{1F4FB}";
    const CHARACTER_VIDEOCASSETTE = "\u{1F4FC}";
    const CHARACTER_FILM_PROJECTOR = "\u{1F4FD}";
    const CHARACTER_PRAYER_BEADS = "\u{1F4FF}";
    const CHARACTER_TWISTED_RIGHTWARDS_ARROWS = "\u{1F500}";
    const CHARACTER_CLOCKWISE_RIGHTWARDS_AND_LEFTWARDS_OPEN_CIRCLE_ARROWS = "\u{1F501}";
    const CHARACTER_CLOCKWISE_RIGHTWARDS_AND_LEFTWARDS_OPEN_CIRCLE_ARROWS_WITH_CIRCLED_ONE_OVERLAY = "\u{1F502}";
    const CHARACTER_CLOCKWISE_DOWNWARDS_AND_UPWARDS_OPEN_CIRCLE_ARROWS = "\u{1F503}";
    const CHARACTER_ANTICLOCKWISE_DOWNWARDS_AND_UPWARDS_OPEN_CIRCLE_ARROWS = "\u{1F504}";
    const CHARACTER_LOW_BRIGHTNESS_SYMBOL = "\u{1F505}";
    const CHARACTER_HIGH_BRIGHTNESS_SYMBOL = "\u{1F506}";
    const CHARACTER_SPEAKER_WITH_CANCELLATION_STROKE = "\u{1F507}";
    const CHARACTER_SPEAKER = "\u{1F508}";
    const CHARACTER_SPEAKER_WITH_ONE_SOUND_WAVE = "\u{1F509}";
    const CHARACTER_SPEAKER_WITH_THREE_SOUND_WAVES = "\u{1F50A}";
    const CHARACTER_BATTERY = "\u{1F50B}";
    const CHARACTER_ELECTRIC_PLUG = "\u{1F50C}";
    const CHARACTER_LEFT_POINTING_MAGNIFYING_GLASS = "\u{1F50D}";
    const CHARACTER_RIGHT_POINTING_MAGNIFYING_GLASS = "\u{1F50E}";
    const CHARACTER_LOCK_WITH_INK_PEN = "\u{1F50F}";
    const CHARACTER_CLOSED_LOCK_WITH_KEY = "\u{1F510}";
    const CHARACTER_KEY = "\u{1F511}";
    const CHARACTER_LOCK = "\u{1F512}";
    const CHARACTER_OPEN_LOCK = "\u{1F513}";
    const CHARACTER_BELL = "\u{1F514}";
    const CHARACTER_BELL_WITH_CANCELLATION_STROKE = "\u{1F515}";
    const CHARACTER_BOOKMARK = "\u{1F516}";
    const CHARACTER_LINK_SYMBOL = "\u{1F517}";
    const CHARACTER_RADIO_BUTTON = "\u{1F518}";
    const CHARACTER_BACK_WITH_LEFTWARDS_ARROW_ABOVE = "\u{1F519}";
    const CHARACTER_END_WITH_LEFTWARDS_ARROW_ABOVE = "\u{1F51A}";
    const CHARACTER_ON_WITH_EXCLAMATION_MARK_WITH_LEFT_RIGHT_ARROW_ABOVE = "\u{1F51B}";
    const CHARACTER_SOON_WITH_RIGHTWARDS_ARROW_ABOVE = "\u{1F51C}";
    const CHARACTER_TOP_WITH_UPWARDS_ARROW_ABOVE = "\u{1F51D}";
    const CHARACTER_NO_ONE_UNDER_EIGHTEEN_SYMBOL = "\u{1F51E}";
    const CHARACTER_KEYCAP_TEN = "\u{1F51F}";
    const CHARACTER_INPUT_SYMBOL_FOR_LATIN_CAPITAL_LETTERS = "\u{1F520}";
    const CHARACTER_INPUT_SYMBOL_FOR_LATIN_SMALL_LETTERS = "\u{1F521}";
    const CHARACTER_INPUT_SYMBOL_FOR_NUMBERS = "\u{1F522}";
    const CHARACTER_INPUT_SYMBOL_FOR_SYMBOLS = "\u{1F523}";
    const CHARACTER_INPUT_SYMBOL_FOR_LATIN_LETTERS = "\u{1F524}";
    const CHARACTER_FIRE = "\u{1F525}";
    const CHARACTER_ELECTRIC_TORCH = "\u{1F526}";
    const CHARACTER_WRENCH = "\u{1F527}";
    const CHARACTER_HAMMER = "\u{1F528}";
    const CHARACTER_NUT_AND_BOLT = "\u{1F529}";
    const CHARACTER_HOCHO = "\u{1F52A}";
    const CHARACTER_PISTOL = "\u{1F52B}";
    const CHARACTER_MICROSCOPE = "\u{1F52C}";
    const CHARACTER_TELESCOPE = "\u{1F52D}";
    const CHARACTER_CRYSTAL_BALL = "\u{1F52E}";
    const CHARACTER_SIX_POINTED_STAR_WITH_MIDDLE_DOT = "\u{1F52F}";
    const CHARACTER_JAPANESE_SYMBOL_FOR_BEGINNER = "\u{1F530}";
    const CHARACTER_TRIDENT_EMBLEM = "\u{1F531}";
    const CHARACTER_BLACK_SQUARE_BUTTON = "\u{1F532}";
    const CHARACTER_WHITE_SQUARE_BUTTON = "\u{1F533}";
    const CHARACTER_LARGE_RED_CIRCLE = "\u{1F534}";
    const CHARACTER_LARGE_BLUE_CIRCLE = "\u{1F535}";
    const CHARACTER_LARGE_ORANGE_DIAMOND = "\u{1F536}";
    const CHARACTER_LARGE_BLUE_DIAMOND = "\u{1F537}";
    const CHARACTER_SMALL_ORANGE_DIAMOND = "\u{1F538}";
    const CHARACTER_SMALL_BLUE_DIAMOND = "\u{1F539}";
    const CHARACTER_UP_POINTING_RED_TRIANGLE = "\u{1F53A}";
    const CHARACTER_DOWN_POINTING_RED_TRIANGLE = "\u{1F53B}";
    const CHARACTER_UP_POINTING_SMALL_RED_TRIANGLE = "\u{1F53C}";
    const CHARACTER_DOWN_POINTING_SMALL_RED_TRIANGLE = "\u{1F53D}";
    const CHARACTER_OM_SYMBOL = "\u{1F549}";
    const CHARACTER_DOVE_OF_PEACE = "\u{1F54A}";
    const CHARACTER_KAABA = "\u{1F54B}";
    const CHARACTER_MOSQUE = "\u{1F54C}";
    const CHARACTER_SYNAGOGUE = "\u{1F54D}";
    const CHARACTER_MENORAH_WITH_NINE_BRANCHES = "\u{1F54E}";
    const CHARACTER_CLOCK_FACE_ONE_OCLOCK = "\u{1F550}";
    const CHARACTER_CLOCK_FACE_TWO_OCLOCK = "\u{1F551}";
    const CHARACTER_CLOCK_FACE_THREE_OCLOCK = "\u{1F552}";
    const CHARACTER_CLOCK_FACE_FOUR_OCLOCK = "\u{1F553}";
    const CHARACTER_CLOCK_FACE_FIVE_OCLOCK = "\u{1F554}";
    const CHARACTER_CLOCK_FACE_SIX_OCLOCK = "\u{1F555}";
    const CHARACTER_CLOCK_FACE_SEVEN_OCLOCK = "\u{1F556}";
    const CHARACTER_CLOCK_FACE_EIGHT_OCLOCK = "\u{1F557}";
    const CHARACTER_CLOCK_FACE_NINE_OCLOCK = "\u{1F558}";
    const CHARACTER_CLOCK_FACE_TEN_OCLOCK = "\u{1F559}";
    const CHARACTER_CLOCK_FACE_ELEVEN_OCLOCK = "\u{1F55A}";
    const CHARACTER_CLOCK_FACE_TWELVE_OCLOCK = "\u{1F55B}";
    const CHARACTER_CLOCK_FACE_ONE_THIRTY = "\u{1F55C}";
    const CHARACTER_CLOCK_FACE_TWO_THIRTY = "\u{1F55D}";
    const CHARACTER_CLOCK_FACE_THREE_THIRTY = "\u{1F55E}";
    const CHARACTER_CLOCK_FACE_FOUR_THIRTY = "\u{1F55F}";
    const CHARACTER_CLOCK_FACE_FIVE_THIRTY = "\u{1F560}";
    const CHARACTER_CLOCK_FACE_SIX_THIRTY = "\u{1F561}";
    const CHARACTER_CLOCK_FACE_SEVEN_THIRTY = "\u{1F562}";
    const CHARACTER_CLOCK_FACE_EIGHT_THIRTY = "\u{1F563}";
    const CHARACTER_CLOCK_FACE_NINE_THIRTY = "\u{1F564}";
    const CHARACTER_CLOCK_FACE_TEN_THIRTY = "\u{1F565}";
    const CHARACTER_CLOCK_FACE_ELEVEN_THIRTY = "\u{1F566}";
    const CHARACTER_CLOCK_FACE_TWELVE_THIRTY = "\u{1F567}";
    const CHARACTER_CANDLE = "\u{1F56F}";
    const CHARACTER_MANTELPIECE_CLOCK = "\u{1F570}";
    const CHARACTER_HOLE = "\u{1F573}";
    const CHARACTER_MAN_IN_BUSINESS_SUIT_LEVITATING = "\u{1F574}";
    const CHARACTER_SLEUTH_OR_SPY = "\u{1F575}";
    const CHARACTER_DARK_SUNGLASSES = "\u{1F576}";
    const CHARACTER_SPIDER = "\u{1F577}";
    const CHARACTER_SPIDER_WEB = "\u{1F578}";
    const CHARACTER_JOYSTICK = "\u{1F579}";
    const CHARACTER_LINKED_PAPERCLIPS = "\u{1F587}";
    const CHARACTER_LOWER_LEFT_BALLPOINT_PEN = "\u{1F58A}";
    const CHARACTER_LOWER_LEFT_FOUNTAIN_PEN = "\u{1F58B}";
    const CHARACTER_LOWER_LEFT_PAINTBRUSH = "\u{1F58C}";
    const CHARACTER_LOWER_LEFT_CRAYON = "\u{1F58D}";
    const CHARACTER_RAISED_HAND_WITH_FINGERS_SPLAYED = "\u{1F590}";
    const CHARACTER_REVERSED_HAND_WITH_MIDDLE_FINGER_EXTENDED = "\u{1F595}";
    const CHARACTER_RAISED_HAND_WITH_PART_BETWEEN_MIDDLE_AND_RING_FINGERS = "\u{1F596}";
    const CHARACTER_DESKTOP_COMPUTER = "\u{1F5A5}";
    const CHARACTER_PRINTER = "\u{1F5A8}";
    const CHARACTER_THREE_BUTTON_MOUSE = "\u{1F5B1}";
    const CHARACTER_TRACKBALL = "\u{1F5B2}";
    const CHARACTER_FRAME_WITH_PICTURE = "\u{1F5BC}";
    const CHARACTER_CARD_INDEX_DIVIDERS = "\u{1F5C2}";
    const CHARACTER_CARD_FILE_BOX = "\u{1F5C3}";
    const CHARACTER_FILE_CABINET = "\u{1F5C4}";
    const CHARACTER_WASTEBASKET = "\u{1F5D1}";
    const CHARACTER_SPIRAL_NOTE_PAD = "\u{1F5D2}";
    const CHARACTER_SPIRAL_CALENDAR_PAD = "\u{1F5D3}";
    const CHARACTER_COMPRESSION = "\u{1F5DC}";
    const CHARACTER_OLD_KEY = "\u{1F5DD}";
    const CHARACTER_ROLLED_UP_NEWSPAPER = "\u{1F5DE}";
    const CHARACTER_DAGGER_KNIFE = "\u{1F5E1}";
    const CHARACTER_SPEAKING_HEAD_IN_SILHOUETTE = "\u{1F5E3}";
    const CHARACTER_LEFT_SPEECH_BUBBLE = "\u{1F5E8}";
    const CHARACTER_RIGHT_ANGER_BUBBLE = "\u{1F5EF}";
    const CHARACTER_BALLOT_BOX_WITH_BALLOT = "\u{1F5F3}";
    const CHARACTER_WORLD_MAP = "\u{1F5FA}";
    const CHARACTER_MOUNT_FUJI = "\u{1F5FB}";
    const CHARACTER_TOKYO_TOWER = "\u{1F5FC}";
    const CHARACTER_STATUE_OF_LIBERTY = "\u{1F5FD}";
    const CHARACTER_SILHOUETTE_OF_JAPAN = "\u{1F5FE}";
    const CHARACTER_MOYAI = "\u{1F5FF}";
    const CHARACTER_GRINNING_FACE = "\u{1F600}";
    const CHARACTER_GRINNING_FACE_WITH_SMILING_EYES = "\u{1F601}";
    const CHARACTER_FACE_WITH_TEARS_OF_JOY = "\u{1F602}";
    const CHARACTER_SMILING_FACE_WITH_OPEN_MOUTH = "\u{1F603}";
    const CHARACTER_SMILING_FACE_WITH_OPEN_MOUTH_AND_SMILING_EYES = "\u{1F604}";
    const CHARACTER_SMILING_FACE_WITH_OPEN_MOUTH_AND_COLD_SWEAT = "\u{1F605}";
    const CHARACTER_SMILING_FACE_WITH_OPEN_MOUTH_AND_TIGHTLY_CLOSED_EYES = "\u{1F606}";
    const CHARACTER_SMILING_FACE_WITH_HALO = "\u{1F607}";
    const CHARACTER_SMILING_FACE_WITH_HORNS = "\u{1F608}";
    const CHARACTER_WINKING_FACE = "\u{1F609}";
    const CHARACTER_SMILING_FACE_WITH_SMILING_EYES = "\u{1F60A}";
    const CHARACTER_FACE_SAVOURING_DELICIOUS_FOOD = "\u{1F60B}";
    const CHARACTER_RELIEVED_FACE = "\u{1F60C}";
    const CHARACTER_SMILING_FACE_WITH_HEART_SHAPED_EYES = "\u{1F60D}";
    const CHARACTER_SMILING_FACE_WITH_SUNGLASSES = "\u{1F60E}";
    const CHARACTER_SMIRKING_FACE = "\u{1F60F}";
    const CHARACTER_NEUTRAL_FACE = "\u{1F610}";
    const CHARACTER_EXPRESSIONLESS_FACE = "\u{1F611}";
    const CHARACTER_UNAMUSED_FACE = "\u{1F612}";
    const CHARACTER_FACE_WITH_COLD_SWEAT = "\u{1F613}";
    const CHARACTER_PENSIVE_FACE = "\u{1F614}";
    const CHARACTER_CONFUSED_FACE = "\u{1F615}";
    const CHARACTER_CONFOUNDED_FACE = "\u{1F616}";
    const CHARACTER_KISSING_FACE = "\u{1F617}";
    const CHARACTER_FACE_THROWING_A_KISS = "\u{1F618}";
    const CHARACTER_KISSING_FACE_WITH_SMILING_EYES = "\u{1F619}";
    const CHARACTER_KISSING_FACE_WITH_CLOSED_EYES = "\u{1F61A}";
    const CHARACTER_FACE_WITH_STUCK_OUT_TONGUE = "\u{1F61B}";
    const CHARACTER_FACE_WITH_STUCK_OUT_TONGUE_AND_WINKING_EYE = "\u{1F61C}";
    const CHARACTER_FACE_WITH_STUCK_OUT_TONGUE_AND_TIGHTLY_CLOSED_EYES = "\u{1F61D}";
    const CHARACTER_DISAPPOINTED_FACE = "\u{1F61E}";
    const CHARACTER_WORRIED_FACE = "\u{1F61F}";
    const CHARACTER_ANGRY_FACE = "\u{1F620}";
    const CHARACTER_POUTING_FACE = "\u{1F621}";
    const CHARACTER_CRYING_FACE = "\u{1F622}";
    const CHARACTER_PERSEVERING_FACE = "\u{1F623}";
    const CHARACTER_FACE_WITH_LOOK_OF_TRIUMPH = "\u{1F624}";
    const CHARACTER_DISAPPOINTED_BUT_RELIEVED_FACE = "\u{1F625}";
    const CHARACTER_FROWNING_FACE_WITH_OPEN_MOUTH = "\u{1F626}";
    const CHARACTER_ANGUISHED_FACE = "\u{1F627}";
    const CHARACTER_FEARFUL_FACE = "\u{1F628}";
    const CHARACTER_WEARY_FACE = "\u{1F629}";
    const CHARACTER_SLEEPY_FACE = "\u{1F62A}";
    const CHARACTER_TIRED_FACE = "\u{1F62B}";
    const CHARACTER_GRIMACING_FACE = "\u{1F62C}";
    const CHARACTER_LOUDLY_CRYING_FACE = "\u{1F62D}";
    const CHARACTER_FACE_WITH_OPEN_MOUTH = "\u{1F62E}";
    const CHARACTER_HUSHED_FACE = "\u{1F62F}";
    const CHARACTER_FACE_WITH_OPEN_MOUTH_AND_COLD_SWEAT = "\u{1F630}";
    const CHARACTER_FACE_SCREAMING_IN_FEAR = "\u{1F631}";
    const CHARACTER_ASTONISHED_FACE = "\u{1F632}";
    const CHARACTER_FLUSHED_FACE = "\u{1F633}";
    const CHARACTER_SLEEPING_FACE = "\u{1F634}";
    const CHARACTER_DIZZY_FACE = "\u{1F635}";
    const CHARACTER_FACE_WITHOUT_MOUTH = "\u{1F636}";
    const CHARACTER_FACE_WITH_MEDICAL_MASK = "\u{1F637}";
    const CHARACTER_GRINNING_CAT_FACE_WITH_SMILING_EYES = "\u{1F638}";
    const CHARACTER_CAT_FACE_WITH_TEARS_OF_JOY = "\u{1F639}";
    const CHARACTER_SMILING_CAT_FACE_WITH_OPEN_MOUTH = "\u{1F63A}";
    const CHARACTER_SMILING_CAT_FACE_WITH_HEART_SHAPED_EYES = "\u{1F63B}";
    const CHARACTER_CAT_FACE_WITH_WRY_SMILE = "\u{1F63C}";
    const CHARACTER_KISSING_CAT_FACE_WITH_CLOSED_EYES = "\u{1F63D}";
    const CHARACTER_POUTING_CAT_FACE = "\u{1F63E}";
    const CHARACTER_CRYING_CAT_FACE = "\u{1F63F}";
    const CHARACTER_WEARY_CAT_FACE = "\u{1F640}";
    const CHARACTER_SLIGHTLY_FROWNING_FACE = "\u{1F641}";
    const CHARACTER_SLIGHTLY_SMILING_FACE = "\u{1F642}";
    const CHARACTER_UPSIDE_DOWN_FACE = "\u{1F643}";
    const CHARACTER_FACE_WITH_ROLLING_EYES = "\u{1F644}";
    const CHARACTER_FACE_WITH_NO_GOOD_GESTURE = "\u{1F645}";
    const CHARACTER_FACE_WITH_OK_GESTURE = "\u{1F646}";
    const CHARACTER_PERSON_BOWING_DEEPLY = "\u{1F647}";
    const CHARACTER_SEE_NO_EVIL_MONKEY = "\u{1F648}";
    const CHARACTER_HEAR_NO_EVIL_MONKEY = "\u{1F649}";
    const CHARACTER_SPEAK_NO_EVIL_MONKEY = "\u{1F64A}";
    const CHARACTER_HAPPY_PERSON_RAISING_ONE_HAND = "\u{1F64B}";
    const CHARACTER_PERSON_RAISING_BOTH_HANDS_IN_CELEBRATION = "\u{1F64C}";
    const CHARACTER_PERSON_FROWNING = "\u{1F64D}";
    const CHARACTER_PERSON_WITH_POUTING_FACE = "\u{1F64E}";
    const CHARACTER_PERSON_WITH_FOLDED_HANDS = "\u{1F64F}";
    const CHARACTER_ROCKET = "\u{1F680}";
    const CHARACTER_HELICOPTER = "\u{1F681}";
    const CHARACTER_STEAM_LOCOMOTIVE = "\u{1F682}";
    const CHARACTER_RAILWAY_CAR = "\u{1F683}";
    const CHARACTER_HIGH_SPEED_TRAIN = "\u{1F684}";
    const CHARACTER_HIGH_SPEED_TRAIN_WITH_BULLET_NOSE = "\u{1F685}";
    const CHARACTER_TRAIN = "\u{1F686}";
    const CHARACTER_METRO = "\u{1F687}";
    const CHARACTER_LIGHT_RAIL = "\u{1F688}";
    const CHARACTER_STATION = "\u{1F689}";
    const CHARACTER_TRAM = "\u{1F68A}";
    const CHARACTER_TRAM_CAR = "\u{1F68B}";
    const CHARACTER_BUS = "\u{1F68C}";
    const CHARACTER_ONCOMING_BUS = "\u{1F68D}";
    const CHARACTER_TROLLEYBUS = "\u{1F68E}";
    const CHARACTER_BUS_STOP = "\u{1F68F}";
    const CHARACTER_MINIBUS = "\u{1F690}";
    const CHARACTER_AMBULANCE = "\u{1F691}";
    const CHARACTER_FIRE_ENGINE = "\u{1F692}";
    const CHARACTER_POLICE_CAR = "\u{1F693}";
    const CHARACTER_ONCOMING_POLICE_CAR = "\u{1F694}";
    const CHARACTER_TAXI = "\u{1F695}";
    const CHARACTER_ONCOMING_TAXI = "\u{1F696}";
    const CHARACTER_AUTOMOBILE = "\u{1F697}";
    const CHARACTER_ONCOMING_AUTOMOBILE = "\u{1F698}";
    const CHARACTER_RECREATIONAL_VEHICLE = "\u{1F699}";
    const CHARACTER_DELIVERY_TRUCK = "\u{1F69A}";
    const CHARACTER_ARTICULATED_LORRY = "\u{1F69B}";
    const CHARACTER_TRACTOR = "\u{1F69C}";
    const CHARACTER_MONORAIL = "\u{1F69D}";
    const CHARACTER_MOUNTAIN_RAILWAY = "\u{1F69E}";
    const CHARACTER_SUSPENSION_RAILWAY = "\u{1F69F}";
    const CHARACTER_MOUNTAIN_CABLEWAY = "\u{1F6A0}";
    const CHARACTER_AERIAL_TRAMWAY = "\u{1F6A1}";
    const CHARACTER_SHIP = "\u{1F6A2}";
    const CHARACTER_ROWBOAT = "\u{1F6A3}";
    const CHARACTER_SPEEDBOAT = "\u{1F6A4}";
    const CHARACTER_HORIZONTAL_TRAFFIC_LIGHT = "\u{1F6A5}";
    const CHARACTER_VERTICAL_TRAFFIC_LIGHT = "\u{1F6A6}";
    const CHARACTER_CONSTRUCTION_SIGN = "\u{1F6A7}";
    const CHARACTER_POLICE_CARS_REVOLVING_LIGHT = "\u{1F6A8}";
    const CHARACTER_TRIANGULAR_FLAG_ON_POST = "\u{1F6A9}";
    const CHARACTER_DOOR = "\u{1F6AA}";
    const CHARACTER_NO_ENTRY_SIGN = "\u{1F6AB}";
    const CHARACTER_SMOKING_SYMBOL = "\u{1F6AC}";
    const CHARACTER_NO_SMOKING_SYMBOL = "\u{1F6AD}";
    const CHARACTER_PUT_LITTER_IN_ITS_PLACE_SYMBOL = "\u{1F6AE}";
    const CHARACTER_DO_NOT_LITTER_SYMBOL = "\u{1F6AF}";
    const CHARACTER_POTABLE_WATER_SYMBOL = "\u{1F6B0}";
    const CHARACTER_NON_POTABLE_WATER_SYMBOL = "\u{1F6B1}";
    const CHARACTER_BICYCLE = "\u{1F6B2}";
    const CHARACTER_NO_BICYCLES = "\u{1F6B3}";
    const CHARACTER_BICYCLIST = "\u{1F6B4}";
    const CHARACTER_MOUNTAIN_BICYCLIST = "\u{1F6B5}";
    const CHARACTER_PEDESTRIAN = "\u{1F6B6}";
    const CHARACTER_NO_PEDESTRIANS = "\u{1F6B7}";
    const CHARACTER_CHILDREN_CROSSING = "\u{1F6B8}";
    const CHARACTER_MENS_SYMBOL = "\u{1F6B9}";
    const CHARACTER_WOMENS_SYMBOL = "\u{1F6BA}";
    const CHARACTER_RESTROOM = "\u{1F6BB}";
    const CHARACTER_BABY_SYMBOL = "\u{1F6BC}";
    const CHARACTER_TOILET = "\u{1F6BD}";
    const CHARACTER_WATER_CLOSET = "\u{1F6BE}";
    const CHARACTER_SHOWER = "\u{1F6BF}";
    const CHARACTER_BATH = "\u{1F6C0}";
    const CHARACTER_BATHTUB = "\u{1F6C1}";
    const CHARACTER_PASSPORT_CONTROL = "\u{1F6C2}";
    const CHARACTER_CUSTOMS = "\u{1F6C3}";
    const CHARACTER_BAGGAGE_CLAIM = "\u{1F6C4}";
    const CHARACTER_LEFT_LUGGAGE = "\u{1F6C5}";
    const CHARACTER_COUCH_AND_LAMP = "\u{1F6CB}";
    const CHARACTER_SLEEPING_ACCOMMODATION = "\u{1F6CC}";
    const CHARACTER_SHOPPING_BAGS = "\u{1F6CD}";
    const CHARACTER_BELLHOP_BELL = "\u{1F6CE}";
    const CHARACTER_BED = "\u{1F6CF}";
    const CHARACTER_PLACE_OF_WORSHIP = "\u{1F6D0}";
    const CHARACTER_HAMMER_AND_WRENCH = "\u{1F6E0}";
    const CHARACTER_SHIELD = "\u{1F6E1}";
    const CHARACTER_OIL_DRUM = "\u{1F6E2}";
    const CHARACTER_MOTORWAY = "\u{1F6E3}";
    const CHARACTER_RAILWAY_TRACK = "\u{1F6E4}";
    const CHARACTER_MOTOR_BOAT = "\u{1F6E5}";
    const CHARACTER_SMALL_AIRPLANE = "\u{1F6E9}";
    const CHARACTER_AIRPLANE_DEPARTURE = "\u{1F6EB}";
    const CHARACTER_AIRPLANE_ARRIVING = "\u{1F6EC}";
    const CHARACTER_SATELLITE = "\u{1F6F0}";
    const CHARACTER_PASSENGER_SHIP = "\u{1F6F3}";
    const CHARACTER_ZIPPER_MOUTH_FACE = "\u{1F910}";
    const CHARACTER_MONEY_MOUTH_FACE = "\u{1F911}";
    const CHARACTER_FACE_WITH_THERMOMETER = "\u{1F912}";
    const CHARACTER_NERD_FACE = "\u{1F913}";
    const CHARACTER_THINKING_FACE = "\u{1F914}";
    const CHARACTER_FACE_WITH_HEAD_BANDAGE = "\u{1F915}";
    const CHARACTER_ROBOT_FACE = "\u{1F916}";
    const CHARACTER_HUGGING_FACE = "\u{1F917}";
    const CHARACTER_SIGN_OF_THE_HORNS = "\u{1F918}";
    const CHARACTER_CRAB = "\u{1F980}";
    const CHARACTER_LION_FACE = "\u{1F981}";
    const CHARACTER_SCORPION = "\u{1F982}";
    const CHARACTER_TURKEY = "\u{1F983}";
    const CHARACTER_UNICORN_FACE = "\u{1F984}";
    const CHARACTER_CHEESE_WEDGE = "\u{1F9C0}";
    const CHARACTER_DOUBLE_EXCLAMATION_MARK = "\u{203C}";
    const CHARACTER_EXCLAMATION_QUESTION_MARK = "\u{2049}";
    const CHARACTER_TRADE_MARK_SIGN = "\u{2122}";
    const CHARACTER_INFORMATION_SOURCE = "\u{2139}";
    const CHARACTER_LEFT_RIGHT_ARROW = "\u{2194}";
    const CHARACTER_UP_DOWN_ARROW = "\u{2195}";
    const CHARACTER_NORTH_WEST_ARROW = "\u{2196}";
    const CHARACTER_NORTH_EAST_ARROW = "\u{2197}";
    const CHARACTER_SOUTH_EAST_ARROW = "\u{2198}";
    const CHARACTER_SOUTH_WEST_ARROW = "\u{2199}";
    const CHARACTER_LEFTWARDS_ARROW_WITH_HOOK = "\u{21A9}";
    const CHARACTER_RIGHTWARDS_ARROW_WITH_HOOK = "\u{21AA}";
    const CHARACTER_WATCH = "\u{231A}";
    const CHARACTER_HOURGLASS = "\u{231B}";
    const CHARACTER_KEYBOARD = "\u{2328}";
    const CHARACTER_EJECT_SYMBOL = "\u{23CF}";
    const CHARACTER_BLACK_RIGHT_POINTING_DOUBLE_TRIANGLE = "\u{23E9}";
    const CHARACTER_BLACK_LEFT_POINTING_DOUBLE_TRIANGLE = "\u{23EA}";
    const CHARACTER_BLACK_UP_POINTING_DOUBLE_TRIANGLE = "\u{23EB}";
    const CHARACTER_BLACK_DOWN_POINTING_DOUBLE_TRIANGLE = "\u{23EC}";
    const CHARACTER_BLACK_RIGHT_POINTING_DOUBLE_TRIANGLE_WITH_VERTICAL_BAR = "\u{23ED}";
    const CHARACTER_BLACK_LEFT_POINTING_DOUBLE_TRIANGLE_WITH_VERTICAL_BAR = "\u{23EE}";
    const CHARACTER_BLACK_RIGHT_POINTING_TRIANGLE_WITH_DOUBLE_VERTICAL_BAR = "\u{23EF}";
    const CHARACTER_ALARM_CLOCK = "\u{23F0}";
    const CHARACTER_STOPWATCH = "\u{23F1}";
    const CHARACTER_TIMER_CLOCK = "\u{23F2}";
    const CHARACTER_HOURGLASS_WITH_FLOWING_SAND = "\u{23F3}";
    const CHARACTER_DOUBLE_VERTICAL_BAR = "\u{23F8}";
    const CHARACTER_BLACK_SQUARE_FOR_STOP = "\u{23F9}";
    const CHARACTER_BLACK_CIRCLE_FOR_RECORD = "\u{23FA}";
    const CHARACTER_CIRCLED_LATIN_CAPITAL_LETTER_M = "\u{24C2}";
    const CHARACTER_BLACK_SMALL_SQUARE = "\u{25AA}";
    const CHARACTER_WHITE_SMALL_SQUARE = "\u{25AB}";
    const CHARACTER_BLACK_RIGHT_POINTING_TRIANGLE = "\u{25B6}";
    const CHARACTER_BLACK_LEFT_POINTING_TRIANGLE = "\u{25C0}";
    const CHARACTER_WHITE_MEDIUM_SQUARE = "\u{25FB}";
    const CHARACTER_BLACK_MEDIUM_SQUARE = "\u{25FC}";
    const CHARACTER_WHITE_MEDIUM_SMALL_SQUARE = "\u{25FD}";
    const CHARACTER_BLACK_MEDIUM_SMALL_SQUARE = "\u{25FE}";
    const CHARACTER_BLACK_SUN_WITH_RAYS = "\u{2600}";
    const CHARACTER_CLOUD = "\u{2601}";
    const CHARACTER_UMBRELLA = "\u{2602}";
    const CHARACTER_SNOWMAN = "\u{2603}";
    const CHARACTER_COMET = "\u{2604}";
    const CHARACTER_BLACK_TELEPHONE = "\u{260E}";
    const CHARACTER_BALLOT_BOX_WITH_CHECK = "\u{2611}";
    const CHARACTER_UMBRELLA_WITH_RAIN_DROPS = "\u{2614}";
    const CHARACTER_HOT_BEVERAGE = "\u{2615}";
    const CHARACTER_SHAMROCK = "\u{2618}";
    const CHARACTER_WHITE_UP_POINTING_INDEX = "\u{261D}";
    const CHARACTER_SKULL_AND_CROSSBONES = "\u{2620}";
    const CHARACTER_RADIOACTIVE_SIGN = "\u{2622}";
    const CHARACTER_BIOHAZARD_SIGN = "\u{2623}";
    const CHARACTER_ORTHODOX_CROSS = "\u{2626}";
    const CHARACTER_STAR_AND_CRESCENT = "\u{262A}";
    const CHARACTER_PEACE_SYMBOL = "\u{262E}";
    const CHARACTER_YIN_YANG = "\u{262F}";
    const CHARACTER_WHEEL_OF_DHARMA = "\u{2638}";
    const CHARACTER_WHITE_FROWNING_FACE = "\u{2639}";
    const CHARACTER_WHITE_SMILING_FACE = "\u{263A}";
    const CHARACTER_ARIES = "\u{2648}";
    const CHARACTER_TAURUS = "\u{2649}";
    const CHARACTER_GEMINI = "\u{264A}";
    const CHARACTER_CANCER = "\u{264B}";
    const CHARACTER_LEO = "\u{264C}";
    const CHARACTER_VIRGO = "\u{264D}";
    const CHARACTER_LIBRA = "\u{264E}";
    const CHARACTER_SCORPIUS = "\u{264F}";
    const CHARACTER_SAGITTARIUS = "\u{2650}";
    const CHARACTER_CAPRICORN = "\u{2651}";
    const CHARACTER_AQUARIUS = "\u{2652}";
    const CHARACTER_PISCES = "\u{2653}";
    const CHARACTER_BLACK_SPADE_SUIT = "\u{2660}";
    const CHARACTER_BLACK_CLUB_SUIT = "\u{2663}";
    const CHARACTER_BLACK_HEART_SUIT = "\u{2665}";
    const CHARACTER_BLACK_DIAMOND_SUIT = "\u{2666}";
    const CHARACTER_HOT_SPRINGS = "\u{2668}";
    const CHARACTER_BLACK_UNIVERSAL_RECYCLING_SYMBOL = "\u{267B}";
    const CHARACTER_WHEELCHAIR_SYMBOL = "\u{267F}";
    const CHARACTER_HAMMER_AND_PICK = "\u{2692}";
    const CHARACTER_ANCHOR = "\u{2693}";
    const CHARACTER_CROSSED_SWORDS = "\u{2694}";
    const CHARACTER_SCALES = "\u{2696}";
    const CHARACTER_ALEMBIC = "\u{2697}";
    const CHARACTER_GEAR = "\u{2699}";
    const CHARACTER_ATOM_SYMBOL = "\u{269B}";
    const CHARACTER_FLEUR_DE_LIS = "\u{269C}";
    const CHARACTER_WARNING_SIGN = "\u{26A0}";
    const CHARACTER_HIGH_VOLTAGE_SIGN = "\u{26A1}";
    const CHARACTER_MEDIUM_WHITE_CIRCLE = "\u{26AA}";
    const CHARACTER_MEDIUM_BLACK_CIRCLE = "\u{26AB}";
    const CHARACTER_COFFIN = "\u{26B0}";
    const CHARACTER_FUNERAL_URN = "\u{26B1}";
    const CHARACTER_SOCCER_BALL = "\u{26BD}";
    const CHARACTER_BASEBALL = "\u{26BE}";
    const CHARACTER_SNOWMAN_WITHOUT_SNOW = "\u{26C4}";
    const CHARACTER_SUN_BEHIND_CLOUD = "\u{26C5}";
    const CHARACTER_THUNDER_CLOUD_AND_RAIN = "\u{26C8}";
    const CHARACTER_OPHIUCHUS = "\u{26CE}";
    const CHARACTER_PICK = "\u{26CF}";
    const CHARACTER_HELMET_WITH_WHITE_CROSS = "\u{26D1}";
    const CHARACTER_CHAINS = "\u{26D3}";
    const CHARACTER_NO_ENTRY = "\u{26D4}";
    const CHARACTER_SHINTO_SHRINE = "\u{26E9}";
    const CHARACTER_CHURCH = "\u{26EA}";
    const CHARACTER_MOUNTAIN = "\u{26F0}";
    const CHARACTER_UMBRELLA_ON_GROUND = "\u{26F1}";
    const CHARACTER_FOUNTAIN = "\u{26F2}";
    const CHARACTER_FLAG_IN_HOLE = "\u{26F3}";
    const CHARACTER_FERRY = "\u{26F4}";
    const CHARACTER_SAILBOAT = "\u{26F5}";
    const CHARACTER_SKIER = "\u{26F7}";
    const CHARACTER_ICE_SKATE = "\u{26F8}";
    const CHARACTER_PERSON_WITH_BALL = "\u{26F9}";
    const CHARACTER_TENT = "\u{26FA}";
    const CHARACTER_FUEL_PUMP = "\u{26FD}";
    const CHARACTER_BLACK_SCISSORS = "\u{2702}";
    const CHARACTER_WHITE_HEAVY_CHECK_MARK = "\u{2705}";
    const CHARACTER_AIRPLANE = "\u{2708}";
    const CHARACTER_ENVELOPE = "\u{2709}";
    const CHARACTER_RAISED_FIST = "\u{270A}";
    const CHARACTER_RAISED_HAND = "\u{270B}";
    const CHARACTER_VICTORY_HAND = "\u{270C}";
    const CHARACTER_WRITING_HAND = "\u{270D}";
    const CHARACTER_PENCIL = "\u{270F}";
    const CHARACTER_BLACK_NIB = "\u{2712}";
    const CHARACTER_HEAVY_CHECK_MARK = "\u{2714}";
    const CHARACTER_HEAVY_MULTIPLICATION_X = "\u{2716}";
    const CHARACTER_LATIN_CROSS = "\u{271D}";
    const CHARACTER_STAR_OF_DAVID = "\u{2721}";
    const CHARACTER_SPARKLES = "\u{2728}";
    const CHARACTER_EIGHT_SPOKED_ASTERISK = "\u{2733}";
    const CHARACTER_EIGHT_POINTED_BLACK_STAR = "\u{2734}";
    const CHARACTER_SNOWFLAKE = "\u{2744}";
    const CHARACTER_SPARKLE = "\u{2747}";
    const CHARACTER_CROSS_MARK = "\u{274C}";
    const CHARACTER_NEGATIVE_SQUARED_CROSS_MARK = "\u{274E}";
    const CHARACTER_BLACK_QUESTION_MARK_ORNAMENT = "\u{2753}";
    const CHARACTER_WHITE_QUESTION_MARK_ORNAMENT = "\u{2754}";
    const CHARACTER_WHITE_EXCLAMATION_MARK_ORNAMENT = "\u{2755}";
    const CHARACTER_HEAVY_EXCLAMATION_MARK_SYMBOL = "\u{2757}";
    const CHARACTER_HEAVY_HEART_EXCLAMATION_MARK_ORNAMENT = "\u{2763}";
    const CHARACTER_HEAVY_BLACK_HEART = "\u{2764}";
    const CHARACTER_HEAVY_PLUS_SIGN = "\u{2795}";
    const CHARACTER_HEAVY_MINUS_SIGN = "\u{2796}";
    const CHARACTER_HEAVY_DIVISION_SIGN = "\u{2797}";
    const CHARACTER_BLACK_RIGHTWARDS_ARROW = "\u{27A1}";
    const CHARACTER_CURLY_LOOP = "\u{27B0}";
    const CHARACTER_DOUBLE_CURLY_LOOP = "\u{27BF}";
    const CHARACTER_ARROW_POINTING_RIGHTWARDS_THEN_CURVING_UPWARDS = "\u{2934}";
    const CHARACTER_ARROW_POINTING_RIGHTWARDS_THEN_CURVING_DOWNWARDS = "\u{2935}";
    const CHARACTER_LEFTWARDS_BLACK_ARROW = "\u{2B05}";
    const CHARACTER_UPWARDS_BLACK_ARROW = "\u{2B06}";
    const CHARACTER_DOWNWARDS_BLACK_ARROW = "\u{2B07}";
    const CHARACTER_BLACK_LARGE_SQUARE = "\u{2B1B}";
    const CHARACTER_WHITE_LARGE_SQUARE = "\u{2B1C}";
    const CHARACTER_WHITE_MEDIUM_STAR = "\u{2B50}";
    const CHARACTER_HEAVY_LARGE_CIRCLE = "\u{2B55}";
    const CHARACTER_WAVY_DASH = "\u{3030}";
    const CHARACTER_PART_ALTERNATION_MARK = "\u{303D}";
    const CHARACTER_CIRCLED_IDEOGRAPH_CONGRATULATION = "\u{3297}";
    const CHARACTER_CIRCLED_IDEOGRAPH_SECRET = "\u{3299}";

    public static function getCharacter(string $characterName) : string
    {
        $constantName = static::convertCharacterNameToConstantName($characterName);

        if (! defined("static::{$constantName}")) {
            throw UnknownCharacter::create($characterName);
        }

        return constant('static::'.$constantName);
    }

    public static function __callStatic(string $methodName, array $parameters) : string
    {
        return static::getCharacter($methodName);
    }

    protected static function convertCharacterNameToConstantName(string $characterName) : string
    {
        $partialConstantName = static::convertToSnakeCase($characterName);

        $constantName = 'CHARACTER_'.strtoupper($partialConstantName);

        return $constantName;
    }

    protected static function convertToSnakeCase(string $value) : string
    {
        if (! ctype_lower($value)) {
            $value = preg_replace('/\s+/', '', $value);

            $value = strtolower(preg_replace('/(.)(?=[A-Z])/', '$1'.'_', $value));
        }

        return $value;
    }
}
