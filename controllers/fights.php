<?php
    function getFight($type, $name) {
        echo '
            <div id="fight', $type ,'">
                <h2 class="noDisplay " id="', $type, '">', $name, '</h2>
                <p id="playerAction', $type ,'"></p>
                <p id="monsterAction', $type ,'"></p>
                <p id="describeMonster', $type ,'"></p>
                <p id="describePlayer', $type ,'"></p>
                <button class="action',$type,' btnChoice" id="fstAtk', $type ,'">Attaque rapide</button >
                <button class="action',$type,' btnChoice" id="strAtk', $type ,'">Attaque lourde</button >
                <button class="action',$type,' btnChoice" id="riposte', $type ,'">Riposte</button >
                <button class="action',$type,' btnChoice" id="usePotion', $type ,'">Utiliser une potion</button >
                <div class="noDisplay" id="victoryDiv', $type ,'">
                    <h1 id="victory', $type ,'"></h1>
                    <button class="action',$type,' btnChoice" id="victoryBtn', $type ,'">Continuer</button>
                </div>
            </div>';
    }