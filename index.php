<?php
// ================= DYNAMIC DATA =================

// Achievements Data
$achievements = [
    [
        "title" => "80+ International Centuries",
        "desc"  => "One of the highest century scorers in international cricket history.",
        "icon"  => "🏆"
    ],
    [
        "title" => "ICC Cricketer of the Year",
        "desc"  => "Won multiple ICC awards including Sir Garfield Sobers Trophy.",
        "icon"  => "👑"
    ],
    [
        "title" => "Fastest to 13000 ODI Runs",
        "desc"  => "Holds record for fastest milestone achievements in ODI cricket.",
        "icon"  => "🔥"
    ],
    [
        "title" => "Former Indian Captain",
        "desc"  => "Led India to historic overseas Test victories.",
        "icon"  => "🇮🇳"
    ]
];

// Timeline Data
$timeline = [
    ["year" => "2008", "event" => "Made international debut for India (ODI)."],
    ["year" => "2011", "event" => "Won ICC Cricket World Cup."],
    ["year" => "2014", "event" => "Became Test Captain of India."],
    ["year" => "2018", "event" => "Historic Test series win in Australia."],
    ["year" => "2023", "event" => "Surpassed major international batting records."]
];

// Stats
$stats = [
    "centuries" => 80,
    "matches" => 500,
    "runs" => 25000
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Virat Kohli | Dynamic Page</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
body{
    background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    color:white;
}
nav{
    display:flex;justify-content:space-between;align-items:center;
    padding:20px 10%;background:rgba(0,0,0,0.6);
    position:fixed;width:100%;z-index:1000;
}
nav h2{color:#ff4d4d;}
nav ul{list-style:none;display:flex;gap:20px;}
nav ul li a{text-decoration:none;color:white;}
nav ul li a:hover{color:#ff4d4d;}

.hero{
    height:100vh;display:flex;flex-direction:column;
    justify-content:center;align-items:center;text-align:center;
}
.hero h1{
    font-size:60px;
    background:linear-gradient(90deg,#ff4d4d,#ff9966);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}
section{padding:80px 10%;}
.section-title{text-align:center;font-size:35px;margin-bottom:40px;color:#ff9966;}

/* Cards */
.achievements{
    display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}
.card{
    background:rgba(255,255,255,0.1);
    padding:25px;border-radius:15px;
    text-align:center;transition:0.4s;
}
.card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 25px rgba(0,0,0,0.5);
}
.card h3{color:#ff4d4d;margin:15px 0;}

/* Timeline */
.timeline{
    position:relative;max-width:900px;margin:auto;
}
.timeline::after{
    content:'';position:absolute;width:4px;background:#ff4d4d;
    top:0;bottom:0;left:50%;
}
.container{
    padding:20px 40px;position:relative;width:50%;
}
.left{left:0;}
.right{left:50%;}
.content{
    background:rgba(255,255,255,0.1);
    padding:20px;border-radius:10px;
}
.content h3{color:#ff9966;}

footer{
    text-align:center;padding:20px;background:black;
}
@media(max-width:768px){
    .timeline::after{left:30px;}
    .container{width:100%;padding-left:70px;}
    .right{left:0;}
}
</style>
</head>

<body>

<nav>
    <h2>Virat Kohli</h2>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#achievements">Achievements</a></li>
        <li><a href="#timeline">Timeline</a></li>
    </ul>
</nav>

<div class="hero">
    <h1>The Run Machine</h1>
    <p>Total Runs: <?php echo number_format($stats['runs']); ?>+</p>
</div>

<!-- ACHIEVEMENTS -->
<section id="achievements">
    <h2 class="section-title">Major Achievements</h2>
    <div class="achievements">
        <?php foreach($achievements as $item): ?>
            <div class="card">
                <div style="font-size:40px;"><?php echo $item['icon']; ?></div>
                <h3><?php echo $item['title']; ?></h3>
                <p><?php echo $item['desc']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- TIMELINE -->
<section id="timeline">
    <h2 class="section-title">Career Timeline</h2>
    <div class="timeline">
        <?php 
        $side = "left";
        foreach($timeline as $event): ?>
            <div class="container <?php echo $side; ?>">
                <div class="content">
                    <h3><?php echo $event['year']; ?></h3>
                    <p><?php echo $event['event']; ?></p>
                </div>
            </div>
        <?php 
        $side = ($side == "left") ? "right" : "left";
        endforeach; ?>
    </div>
</section>

<footer>
    © <?php echo date("Y"); ?> Virat Kohli Dynamic Fan Page
</footer>

</body>
</html>
