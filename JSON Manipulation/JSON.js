
Result Size: 668 x 602

      "tableware"

    ],

    "purchased_at": 1578672242,

    "placement": {

      "room_id": 10,

      "name": "Rajawali"

    }

  }

]};

document.write("items in the Meeting Room : <br>");

for (var key in data.room) {   

    if (data.room[key].placement.name == "Meeting Room"){

    document.write(data.room[key].name);

    document.write("<br>");

    }

}

document.write("electronic devices : <br>");

for (var key in data.room) {   

    if (data.room[key].type == "electronic"){

    document.write(data.room[key].name);

    document.write("<br>");

    }

}

const v = Math.round(new Date('2020/01/16').getTime() / 1000 );

const a = v+82871;

document.write("items were purchased on 16 Januari 2020 : <br>");

for (var key in data.room) {   

    if (data.room[key].purchased_at == a){

    document.write(data.room[key].name);

    document.write("<br>");

    }

}

document.write("all items with brown color: <br>");

for (var key in data.room) {   

    var arr = data.room[key].tags;

    if (arr.includes("brown") == true){

    document.write(data.room[key].name);

    document.write("<br>");

    }

}

</script>