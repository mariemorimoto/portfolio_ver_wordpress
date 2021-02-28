function radarChart() {
    var skillChart = document.getElementById("skillChart").getContext('2d');
    var toolChart = document.getElementById("toolChart").getContext('2d');
    var myChart = new Chart(skillChart, {
        type: "radar",
        data: {
            labels:  ["HTML", "CSS", "JQuery", "JavaScript", "PHP"],    // 軸のラベル
            datasets: [
                {
                    label: "スキル",
                    data: [80, 80, 70, 50, 50],
                    backgroundColor: "rgba(255,0,0,0.2)",   // 線の下の塗りつぶしの色
                    borderColor: "#E3007F",                 // 線の色
                    borderWidth: 2,                         // 線の幅
                    pointRadius: 3,                         // 点形状の半径
                    pointBorderColor: "#E3007F",			// 点の境界線の色
                    pointBorderWidth: 2,					// 点の境界線の幅
                    pointBackgroundColor: "#E3007F"			// 点の塗りつぶし色
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: false
            },
            legend: {
                display: false
            },
            scale: {						// 軸のラベル
                pointLabels: {
                    fontSize: 15,			//文字の大きさ
                    fontColor: "#37323E"	// 文字の色
                },
                ticks: {					// 目盛り
                    min: 0,					// 最小値
                    max: 100,				// 最大値
                    stepSize: 20,			// 目盛の間隔
                    fontSize: 12,			// 目盛り数字の大きさ
                    fontColor: "#37323E" 	// 目盛り数字の色
                },
                angleLines: {		// 軸（放射軸）
                    display: true,
                    color: "#37323E"
                },
                gridLines: {		// 補助線（目盛の線）
                    display: true,
                    color: "#37323E"
                }
            }
        }
    });
    var myChart = new Chart(toolChart, {
        type: "radar",
        data: {
            labels:  ["PhotoShop", "Illustrator", "XD", "Git", "MAMP"],		// 軸のラベル
            datasets: [
                {
                    label: "使用ツール",
                    data: [70, 70, 70, 50, 70],
                    backgroundColor: "rgba(255,0,0,0.2)",		// 線の下の塗りつぶしの色
                    borderColor: "#E3007F",						// 線の色
                    borderWidth: 2,								// 線の幅
                    pointRadius: 3,								// 点形状の半径
                    pointBorderColor: "#E3007F",				// 点の境界線の色
                    pointBorderWidth: 2,						// 点の境界線の幅
                    pointBackgroundColor: "#E3007F"				// 点の塗りつぶし色
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            title: {
                display: false
            },
            legend: {
                display: false
            },
            scale: {
                pointLabels: {				// 軸のラベル
                    fontSize: 15,			// 文字の大きさ
                    fontColor: "#37323E"    // 文字の色
                },
                ticks: {					// 目盛り
                    min: 0,					// 最小値
                    max: 100,				// 最大値
                    stepSize: 20,			// 目盛の間隔
                    fontSize: 12,			// 目盛り数字の大きさ
                    fontColor: "#37323E" 	// 目盛り数字の色
                },
                angleLines: {				// 軸（放射軸）
                    display: true,
                    color: "#37323E"
                },
                gridLines: {				// 補助線（目盛の線）
                    display: true,
                    color: "#37323E"
                }
            }
        }
    });
}

/**
 *@param getByid 対象のタグのID
 *@param css CSSスタイルを当てる　連想配列
*/

var typingTimer; //setIntervalを格納するための変数
function typingMethod(getByid){
var Type;   //Typing対象の文字列
var typeing = document.getElementById(getByid); //typingタグからタイプ対象をゲット
var Type = typeing.innerText; //Typeテキストの取得
var TypeLen = Type.length; //Typeテキストの取得

var i = 0; //文字列カットなどに使われるカウンター
typeing.innerHTML = ""; //typingタグを一時的に空白の状態にする

typingTimer = setInterval(function(){   //interval(定期実行)の開始

    //typingタグの現在状況の把握
    var inner = typeing.innerHTML;
    
    //現在状況とType対象のデータをカットしたものを改行付きで出力する
    typeing.innerHTML = inner + Type.substr(i,3) + "<br>";
    i = i + 3;
    //最初に取得した文字列の数よりカウンターの数が以上の関係になったとき定期実行を止める
    if (TypeLen <= i){ stopTimer(); }
}, 300);
}

function stopTimer(){
    clearInterval(typingTimer);
}

$(function(){
    new Vivus("logo",{start: 'autostart', type: 'sync', duration: 130});
    //メイン画像テキスト表示
    typingMethod('typing');
    radarChart();
});