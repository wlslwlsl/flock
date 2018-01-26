#page4 interface
#decision tree

<!doctype html>
<html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <style type="text/css">
      #title1 {width:380px; height:100px;}
	 #text0 {width:300px;}
	 #text1 {width:100px;}
	 #text2 {width:300px;}
	 #title1 {width:380px; height:100px;}
	 #id {line-height:30px;width:150px;}
	 #pro {text-decoration:none; color:#585858;} 
	 #project {color:blue;font-size:1em;}
	 #progress {margin-left:40px;}
	 #center {text-align:center;}
	 #eleven {width:200px;height:300;}
	 #school2 {height:100px;}
	 #link {color:black;}
	 a {text-decoration:none; color:black;}
	 td { border:1px solid #a1a1a1;  height:30px;}
	 #content{
		 font-size: 18px;
		 text-align: left;
		 color : black;
	 }
	 #table{
		
		border-top: 1px solid #CEE3F6;
    		border-collapse: collapse;
		margin-left:800px;
	}
	#th{
	    	text-align:center;
		border-bottom: 1px solid #CEE3F6;
		padding: 10px;
	}
	#td{
		border-left:0px solid white;
		border-right:0px solid white;
		border-bottom: 1px solid #CEE3F6;
		padding: 10px;
	}
	#tr{
		background-color:#CECEF6;
	}
#tdtop{
		font-size:3em;
		color:#585858;
	}
	#top{
		border:3px dotted #CECEF6;
	}
#submit{
  background:#CECEF6;
  color:#fff;
  border:none;
  position:relative;
  height:50px;
  font-size:1.2em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
 border-radius:5px;
 margin-left:90px;
 margin-bottom:30px;
}
#submit:hover{
  background:#fff;
  color:#CECEF6;
}
#submit:before,submit:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #5858FA;
  transition:400ms ease all;
}
#submit:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
#submit:hover:before,submit:hover:after{
  width:100%;
  transition:800ms ease all;
}
.button {
   border: 1px solid #375d73;
   background: #70a4c7;
   background: -webkit-gradient(linear, left top, left bottom, from(#2e688f), to(#70a4c7));
   background: -webkit-linear-gradient(top, #2e688f, #70a4c7);
   background: -moz-linear-gradient(top, #2e688f, #70a4c7);
   background: -ms-linear-gradient(top, #2e688f, #70a4c7);
   background: -o-linear-gradient(top, #2e688f, #70a4c7);
   background-image: -ms-linear-gradient(top, #2e688f 0%, #70a4c7 100%);
   padding: 3.5px 7px;
   -webkit-border-radius: 7px;
   -moz-border-radius: 7px;
   border-radius: 7px;
   -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 1px 0;
   text-shadow: #c0ced6 0 1px 0;
   color: #e7ecf0;
   font-size: 14px;
   font-family: helvetica, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border: 1px solid #6dbeed;
   text-shadow: #b2c8d6 0 1px 0;
   background: #afc9db;
   background: -webkit-gradient(linear, left top, left bottom, from(#7bbce8), to(#afc9db));
   background: -webkit-linear-gradient(top, #7bbce8, #afc9db);
   background: -moz-linear-gradient(top, #7bbce8, #afc9db);
   background: -ms-linear-gradient(top, #7bbce8, #afc9db);
   background: -o-linear-gradient(top, #7bbce8, #afc9db);
   background-image: -ms-linear-gradient(top, #7bbce8 0%, #afc9db 100%);
   color: #e7ecf0;
   }
.button:active {
   text-shadow: #1e4158 0 1px 0;
   border: 1px solid #0a3c59;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#afc9db));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   background-image: -ms-linear-gradient(top, #3e779d 0%, #65a9d7 100%);
   color: #fff;
   }
canvas {
    border: 1px solid #ccc;
    margin: 30px;
    margin-top: 5px;
}

.color-select {
    margin: 1px;
    margin-top: 10px;
    width : 30px;
    height : 30px;
    display:inline-block;
}

.color-select:first-child {
    margin-left: 30px;
}

.clearBtn {
    margin-top: 12px;
    margin-left: 15px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius:5px;
    color: green;
    background-color: #EDEDED;
    font-size: 15px;
    text-decoration: none;
    cursor: poiner;
    height: 30px;
    position: absolute;
}

.tree ul {
	padding-top: 20px;
    position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li {
    white-space: nowrap;
	float: left;
    text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li::before, .tree li::after{
	content: '';
	position: absolute;
    top: 0;
    right: 50%;
	border-top: 1px solid #ccc;
	width: 50%;
    height: 20px;
}
.tree li::after{
	right: auto;
    left: 50%;
	border-left: 1px solid #ccc;
}

.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}

.tree li:only-child{
    padding-top: 0;
}

.tree li:first-child::before, .tree li:last-child::after{
	border: 0 none;
}

.tree li:last-child::before{
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

.tree ul ul::before{
	content: '';
	position: absolute;
    top: 0;
    left: 50%;
	border-left: 1px solid #ccc;
	width: 0;
    height: 20px;
}

.tree li a{
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.tree li a:hover, .tree li a:hover+ul li a {
	background: #c8e4f8;
    color: #000;
    border: 1px solid #94a0b4;
}

.tree li a:hover+ul li::after,
.tree li a:hover+ul li::before,
.tree li a:hover+ul::before,
.tree li a:hover+ul ul::before{
	border-color:  #94a0b4;
}
</style>

<script language="javascript">
 
function New()
{
	var check = confirm("generate more label?");

      	  if(check == true) location.href="page1.php";
      	  else {
		alert("cancel");
   }
 }
function End()
{
	var check = confirm("stop labeling?");

      	  if(check == true) location.href="page4.php";
      	  else {
		alert("cancel");
   }
}
var dt = (function () {
          
    /**
     * Creates an instance of DecisionTree
     *
     * @constructor
     * @param builder - contains training set and
     *                  some configuration parameters
     */
    function DecisionTree(builder) {        
        this.root = buildDecisionTree({
            trainingSet: builder.trainingSet,
            ignoredAttributes: arrayToHashSet(builder.ignoredAttributes),
            categoryAttr: builder.categoryAttr || 'category',
            minItemsCount: builder.minItemsCount || 1,
            entropyThrehold: builder.entropyThrehold || 0.01,
            maxTreeDepth: builder.maxTreeDepth || 70
        });
    }
          
    DecisionTree.prototype.predict = function (item) {
        return predict(this.root, item);
    }

    /**
     * Creates an instance of RandomForest
     * with specific number of trees
     *
     * @constructor
     * @param builder - contains training set and some
     *                  configuration parameters for
     *                  building decision trees
     */
    function RandomForest(builder, treesNumber) {
        this.trees = buildRandomForest(builder, treesNumber);
    }
          
    RandomForest.prototype.predict = function (item) {
        return predictRandomForest(this.trees, item);
    }
    
    /**
     * Transforming array to object with such attributes 
     * as elements of array (afterwards it can be used as HashSet)
     */
    function arrayToHashSet(array) {
        var hashSet = {};
        if (array) {
            for(var i in array) {
                var attr = array[i];
                hashSet[attr] = true;
            }
        }
        return hashSet;
    }
    
    /**
     * Calculating how many objects have the same 
     * values of specific attribute.
     *
     * @param items - array of objects
     *
     * @param attr  - variable with name of attribute, 
     *                which embedded in each object
     */
    function countUniqueValues(items, attr) {
        var counter = {};

        // detecting different values of attribute
        for (var i = items.length - 1; i >= 0; i--) {
            // items[i][attr] - value of attribute
            counter[items[i][attr]] = 0;
        }
          
        // counting number of occurrences of each of values
        // of attribute
        for (var i = items.length - 1; i >= 0; i--) {
            counter[items[i][attr]] += 1;
        }

        return counter;
    }
    
    /**
     * Calculating entropy of array of objects 
     * by specific attribute.
     *
     * @param items - array of objects
     *
     * @param attr  - variable with name of attribute, 
     *                which embedded in each object
     */
    function entropy(items, attr) {
        // counting number of occurrences of each of values
        // of attribute
        var counter = countUniqueValues(items, attr);

        var entropy = 0;
        var p;
        for (var i in counter) {
            p = counter[i] / items.length;
            entropy += -p * Math.log(p);
        }

        return entropy;
    }
          
    /**
     * Splitting array of objects by value of specific attribute, 
     * using specific predicate and pivot.
     *
     * Items which matched by predicate will be copied to 
     * the new array called 'match', and the rest of the items 
     * will be copied to array with name 'notMatch'
     *
     * @param items - array of objects
     *
     * @param attr  - variable with name of attribute,
     *                which embedded in each object
     *
     * @param predicate - function(x, y) 
     *                    which returns 'true' or 'false'
     *
     * @param pivot - used as the second argument when 
     *                calling predicate function:
     *                e.g. predicate(item[attr], pivot)
     */
    function split(items, attr, predicate, pivot) {
        var match = [];
        var notMatch = [];

        var item,
            attrValue;
          
        for (var i = items.length - 1; i >= 0; i--) {
            item = items[i];
            attrValue = item[attr];

            if (predicate(attrValue, pivot)) {
                match.push(item);
            } else {
                notMatch.push(item);
            }
        };

        return {
            match: match,
            notMatch: notMatch
        };
    }

    /**
     * Finding value of specific attribute which is most frequent
     * in given array of objects.
     *
     * @param items - array of objects
     *
     * @param attr  - variable with name of attribute, 
     *                which embedded in each object
     */
    function mostFrequentValue(items, attr) {
        // counting number of occurrences of each of values
        // of attribute
        var counter = countUniqueValues(items, attr);

        var mostFrequentCount = 0;
        var mostFrequentValue;

        for (var value in counter) {
            if (counter[value] > mostFrequentCount) {
                mostFrequentCount = counter[value];
                mostFrequentValue = value;
            }
        };

        return mostFrequentValue;
    }
          
    var predicates = {
        '==': function (a, b) { return a == b },
        '>=': function (a, b) { return a >= b }
    };

    /**
     * Function for building decision tree
     */
    function buildDecisionTree(builder) {

        var trainingSet = builder.trainingSet;
        var minItemsCount = builder.minItemsCount;
        var categoryAttr = builder.categoryAttr;
        var entropyThrehold = builder.entropyThrehold;
        var maxTreeDepth = builder.maxTreeDepth;
        var ignoredAttributes = builder.ignoredAttributes;

        if ((maxTreeDepth == 0) || (trainingSet.length <= minItemsCount)) {
            // restriction by maximal depth of tree
            // or size of training set is to small
            // so we have to terminate process of building tree
            return {
                category: mostFrequentValue(trainingSet, categoryAttr)
            };
        }

        var initialEntropy = entropy(trainingSet, categoryAttr);

        if (initialEntropy <= entropyThrehold) {
            // entropy of training set too small
            // (it means that training set is almost homogeneous),
            // so we have to terminate process of building tree
            return {
                category: mostFrequentValue(trainingSet, categoryAttr)
            };
        }

        // used as hash-set for avoiding the checking of split by rules
        // with the same 'attribute-predicate-pivot' more than once
        var alreadyChecked = {};
          
        // this variable expected to contain rule, which splits training set
        // into subsets with smaller values of entropy (produces informational gain)
        var bestSplit = {gain: 0};

        for (var i = trainingSet.length - 1; i >= 0; i--) {
            var item = trainingSet[i];

            // iterating over all attributes of item
            for (var attr in item) {
                if ((attr == categoryAttr) || ignoredAttributes[attr]) {
                    continue;
                }

                // let the value of current attribute be the pivot
                var pivot = item[attr];

                // pick the predicate
                // depending on the type of the attribute value
                var predicateName;
                if (typeof pivot == 'number') {
                    predicateName = '>=';
                } else {
                    // there is no sense to compare non-numeric attributes
                    // so we will check only equality of such attributes
                    predicateName = '==';
                }

                var attrPredPivot = attr + predicateName + pivot;
                if (alreadyChecked[attrPredPivot]) {
                    // skip such pairs of 'attribute-predicate-pivot',
                    // which been already checked
                    continue;
                }
                alreadyChecked[attrPredPivot] = true;

                var predicate = predicates[predicateName];
          
                // splitting training set by given 'attribute-predicate-value'
                var currSplit = split(trainingSet, attr, predicate, pivot);

                // calculating entropy of subsets
                var matchEntropy = entropy(currSplit.match, categoryAttr);
                var notMatchEntropy = entropy(currSplit.notMatch, categoryAttr);

                // calculating informational gain
                var newEntropy = 0;
                newEntropy += matchEntropy * currSplit.match.length;
                newEntropy += notMatchEntropy * currSplit.notMatch.length;
                newEntropy /= trainingSet.length;
                var currGain = initialEntropy - newEntropy;

                if (currGain > bestSplit.gain) {
                    // remember pairs 'attribute-predicate-value'
                    // which provides informational gain
                    bestSplit = currSplit;
                    bestSplit.predicateName = predicateName;
                    bestSplit.predicate = predicate;
                    bestSplit.attribute = attr;
                    bestSplit.pivot = pivot;
                    bestSplit.gain = currGain;
                }
            }
        }

        if (!bestSplit.gain) {
            // can't find optimal split
            return { category: mostFrequentValue(trainingSet, categoryAttr) };
        }

        // building subtrees
          
        builder.maxTreeDepth = maxTreeDepth - 1;

        builder.trainingSet = bestSplit.match;
        var matchSubTree = buildDecisionTree(builder);

        builder.trainingSet = bestSplit.notMatch;
        var notMatchSubTree = buildDecisionTree(builder);

        return {
            attribute: bestSplit.attribute,
            predicate: bestSplit.predicate,
            predicateName: bestSplit.predicateName,
            pivot: bestSplit.pivot,
            match: matchSubTree,
            notMatch: notMatchSubTree,
            matchedCount: bestSplit.match.length,
            notMatchedCount: bestSplit.notMatch.length
        };
    }

    /**
     * Classifying item, using decision tree
     */
    function predict(tree, item) {
        var attr,
            value,
            predicate,
            pivot;
        
        // Traversing tree from the root to leaf
        while(true) {
          
            if (tree.category) {
                // only leafs contains predicted category
                return tree.category;
            }

            attr = tree.attribute;
            value = item[attr];

            predicate = tree.predicate;
            pivot = tree.pivot;

            // move to one of subtrees
            if (predicate(value, pivot)) {
                tree = tree.match;
            } else {
                tree = tree.notMatch;
            }
        }
    }

    /**
     * Building array of decision trees
     */
    function buildRandomForest(builder, treesNumber) {
        var items = builder.trainingSet;
          
        // creating training sets for each tree
        var trainingSets = [];
        for (var t = 0; t < treesNumber; t++) {
            trainingSets[t] = [];
        }
        for (var i = items.length - 1; i >= 0 ; i--) {
          // assigning items to training sets of each tree
          // using 'round-robin' strategy
          var correspondingTree = i % treesNumber;
          trainingSets[correspondingTree].push(items[i]);
        }

        // building decision trees
        var forest = [];
        for (var t = 0; t < treesNumber; t++) {
            builder.trainingSet = trainingSets[t];

            var tree = new DecisionTree(builder);
            forest.push(tree);
        }
        return forest;
    }

    /**
     * Each of decision tree classifying item
     * ('voting' that item corresponds to some class).
     *
     * This function returns hash, which contains 
     * all classifying results, and number of votes 
     * which were given for each of classifying results
     */
    function predictRandomForest(forest, item) {
        var result = {};
        for (var i in forest) {
            var tree = forest[i];
            var prediction = tree.predict(item);
            result[prediction] = result[prediction] ? result[prediction] + 1 : 1;
        }
        return result;
    }

    var exports = {};
    exports.DecisionTree = DecisionTree;
    exports.RandomForest = RandomForest;
    return exports;
})();
function init() {

    var canv = document.getElementById('myCanvas');
    var clearBtn = document.getElementById('clearBtn');
    var context = canv.getContext('2d');
    var displayTreeDiv = document.getElementById('displayTree');

    var NOT_SELECTED_COLOR_STYLE = '2px solid white';
    var SELECTED_COLOR_STYLE = '2px solid black';
    var colorSelectElements = document.getElementsByClassName('color-select');
    for (var i = 0; i < colorSelectElements.length; i++) {
        colorSelectElements[i].style.backgroundColor = colorSelectElements[i].getAttribute('label');
        colorSelectElements[i].style.border = NOT_SELECTED_COLOR_STYLE;
    }

    var color = colorSelectElements[0].getAttribute('label');
    var POINT_RADIUS = 3;
    var points = [];
    var tree = null;
    var MAX_ALPHA = 128;
    var addingPoints = false;

    colorSelectElements[0].style.border = SELECTED_COLOR_STYLE;

    canv.addEventListener('mousedown', enableAddingPointsListener, false);

    canv.addEventListener('mouseup', rebuildForestListener, false);

    canv.addEventListener('mouseout', rebuildForestListener, false);

    canv.addEventListener('mousemove', addPointsListener, false);


    for (var i = 0; i < colorSelectElements.length; i++) {
        colorSelectElements[i].addEventListener('click', selectColorListener, false);
    }

    clearBtn.addEventListener('click', clearCanvasListener, false);

    function enableAddingPointsListener(e) {
        e.preventDefault();
        addingPoints = true;
    }

    function addPointsListener(e) {
        if (addingPoints) {
            var x = e.offsetX ? e.offsetX : (e.layerX - canv.offsetLeft);
            var y = e.offsetY ? e.offsetY : (e.layerY - canv.offsetTop);

            drawCircle(context, x, y, POINT_RADIUS, color);
            points.push({
                x: x,
                y: y,
                color: color
            });
        }
    }

    function rebuildForestListener(e) {

        if (!addingPoints) return;

        if (points.length == 0) return;

        addingPoints = false;


        var threshold = Math.floor(points.length / 100);
        threshold = (threshold > 1) ? threshold : 1;

        tree = new dt.DecisionTree({
            trainingSet: points,
            categoryAttr: 'color',
            minItemsCount: threshold
        });

        displayTreePredictions();
        displayPoints();

        displayTreeDiv.innerHTML = treeToHtml(tree.root);
    }

    function displayTreePredictions() {
        context.clearRect(0, 0, canv.width, canv.height);
        var imageData = context.getImageData(0, 0, canv.width, canv.height);

        for (var x = 0; x < canv.width; x++) {
            for (var y = 0; y < canv.height; y++) {
                var predictedHexColor = tree.predict({
                    x: x,
                    y: y
                });
                putPixel(imageData, canv.width, x, y, predictedHexColor, MAX_ALPHA);
            }
        }

        context.putImageData(imageData, 0, 0);
    }

    function displayPoints() {
        for (var p in points) {
            drawCircle(context, points[p].x, points[p].y, POINT_RADIUS, points[p].color);
        }
    }

    function drawCircle(context, x, y, radius, hexColor) {
        context.beginPath();
        context.arc(x, y, radius, 0, 2 * Math.PI, false);

        var c = hexToRgb(hexColor)
        context.fillStyle = 'rgb(' + c.r + ',' + c.g + ',' + c.b + ')';

        context.fill();
        context.closePath();
        context.stroke();
    }

    function putPixel(imageData, width, x, y, hexColor, alpha) {
        var c = hexToRgb(hexColor);
        var indx = (y * width + x) * 4;

        var currAlpha = imageData.data[indx + 3];

        imageData.data[indx + 0] = (c.r * alpha + imageData.data[indx + 0] * currAlpha) / (alpha + currAlpha);
        imageData.data[indx + 1] = (c.g * alpha + imageData.data[indx + 1] * currAlpha) / (alpha + currAlpha);
        imageData.data[indx + 2] = (c.b * alpha + imageData.data[indx + 2] * currAlpha) / (alpha + currAlpha);
        imageData.data[indx + 3] = alpha + currAlpha;
    }

    function selectColorListener(event) {
        color = this.getAttribute('label');

        for (var i = 0; i < colorSelectElements.length; i++) {
            colorSelectElements[i].style.border = NOT_SELECTED_COLOR_STYLE;
        }

        this.style.border = SELECTED_COLOR_STYLE;
    }

    function clearCanvasListener(event) {
        context.clearRect(0, 0, canv.width, canv.height);
        points = [];
        displayTreeDiv.innerHTML = '';
    }

    /**
     * Taken from: http://stackoverflow.com/a/5624139/653511
     */
    function hexToRgb(hex) {
        // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
        var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
        hex = hex.replace(shorthandRegex, function (m, r, g, b) {
            return r + r + g + g + b + b;
        });

        var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
        return result ? {
            r: parseInt(result[1], 16),
            g: parseInt(result[2], 16),
            b: parseInt(result[3], 16)
        } : null;
    }

    // Repeating of string taken from: http://stackoverflow.com/a/202627/653511
    var EMPTY_STRING = new Array(26).join('&nbsp;');
    
    // Recursively traversing decision tree (DFS)
    function treeToHtml(tree) {
        
        if (tree.category) {
            return  ['<ul>',
                        '<li>',
                            '<a href="#" style="background-color:', tree.category, '">', EMPTY_STRING, '</a>',
                        '</li>',
                     '</ul>'].join('');
        }
        
        return  ['<ul>',
                    '<li>',
                        '<a href="#"><b>', tree.attribute, ' ', tree.predicateName, ' ', tree.pivot, ' ?</b></a>',
                        '<ul>',
                            '<li>',
                                '<a href="#">yes (', tree.matchedCount, ' points) </a>',
                                treeToHtml(tree.match),
                            '</li>',
                            '<li>',
                                '<a href="#">no (', tree.notMatchedCount, ' points) </a>',
                                treeToHtml(tree.notMatch),
                            '</li>',
                        '</ul>',
                    '</li>',
                 '</ul>'].join('');
    }
}
</script>
 </head>
 <body onLoad="init()">
 <div>
  <table id="top" border="0" width="1000" height="100" cellpadding="0" cellspacing="0">
  <tr>
    <td id="tdtop" style="border-color:white"> Flock </td>
  </tr>
 <table id="title1" border="0" style="border-color:white" width="2800" height="100" rules="none" >
    <tr >
	 <td style="border-color:white">
     <span style="font-size:1.5em"><a href = "page1.php" id="pro"> Project1 </a></span> <a href="project.php" id="project"> edit </a><br>
	 </td>
	</tr>
  </table><br><br>
<table border="0" width="1000" align="center">
<table border='0' style="text-align:center" id="table"> <tr id="tr"> <th id="th">class</th> <th id="th">score</th> </tr>
	<tr>
	<td id="td"> clothes </td>
	<td id="td"><span style="font-weight:bold">430 </span></td>
	</tr>
	<tr>
	<td id="td"> gender </td>
	<td id="td"><span style="font-weight:bold">270 </span></td>
	</tr>
	<tr>
	<td id="td"> Size </td>
	<td id="td"><span style="font-weight:bold">330 </span></td>
	</tr>
</table>
</table><br><br><br>
	<div class="color-select" label="#33CCFF">&nbsp;</div>
   	<div class="color-select" label="#009933">&nbsp;</div>
    	<div class="color-select" label="#FF6600">&nbsp;</div>
    	<div class="color-select" label="#FFC508">&nbsp;</div>
    
	<button id="clearBtn" class="clearBtn">clear</button>
	<br/>
    
	<canvas id="myCanvas" width="400" height="400"></canvas>
    	<br/>
    
    	<div class="tree" id="displayTree"></div>    
	<button id="submit" onclick="location.href=page3.php">back</button>
	<button type="button" id = "submit" onclick="New()">Make New Tree</button>
	<button type="button" id = "submit" onclick="End()">End</button>

</table>
</div>
 </body>
 </html>
