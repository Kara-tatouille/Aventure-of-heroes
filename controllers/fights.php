<?php


function getFight( $type, $name)
{
    echo '<div id="fight', $type ,'">
        <h2 id="', $type, '">', $name, '</h2>
        <p id="playerAction', $type ,'"></p>
        <p id="monsterAction', $type ,'"></p>
        <p id="describeMonster', $type ,'"></p>
        <p id="describePlayer', $type ,'"></p>
        <button class="action',$type,' btnChoice" id="fstAtk', $type ,'"></button >
        <button class="action',$type,' btnChoice" id="strAtk', $type ,'"></button >
        <button class="action',$type,' btnChoice" id="riposte', $type ,'"></button >
        <button class="action',$type,' btnChoice" id="usePotion', $type ,'"></button >
        <h1 id="victory', $type ,'"></h1>
        <button class="action',$type,' btnChoice" id="victoryBtn', $type ,'"></button>
    </div>';
}
