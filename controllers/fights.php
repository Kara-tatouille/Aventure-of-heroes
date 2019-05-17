<?php
    function getFight($type, $name) {
        echo '
            <div class="noDisplay" id="fight', $type ,'">
                <h2 class="noDisplay " id="', $type, '">', $name, '</h2>
                <p id="playerAction', $type ,'"></p>
                <p id="monsterAction', $type ,'"></p>
                <p id="describeMonster', $type ,'"></p>
                
                <div id="actionDiv',$type ,'" class="noDisplay">
                <div class="btnAttack flexRow"> 
                    <button class="action',$type,' btnChoice" id="fstAtk', $type ,'">Attaque rapide</button >
                    <button class="action',$type,' btnChoice" id="strAtk', $type ,'">Attaque lourde</button >
                    <button class="action',$type,' btnChoice" id="riposte', $type ,'">Riposte</button >
                </div>
                <div class="btnPotion flexRow">
                    <button class="action',$type,' btnChoice" id="usePotion', $type ,'">Utiliser une potion</button >
                </div>
                </div>
                
                
                <div class="noDisplay" id="victoryDiv', $type ,'">
                <h1 class="flex" id="victory', $type ,'"></h1>
                <button class="flex action',$type,' btnChoice" id="victoryBtn', $type ,'">Continuer</button>
                </div>
                
                
                <div class="noDisplay" id="defeatDiv', $type ,'">
                <h1 class="flex" id="defeat', $type ,'"></h1>
                <button class="flex action',$type,' btnChoice" id="defeatBtn', $type ,'">GAME OVER</button>
                </div>
                
                </div>';
            }
            
            // <p id="describePlayer', $type ,'"></p>