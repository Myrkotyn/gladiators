<?php

namespace AppBundle\DBAL\Types;

use Fresh\DoctrineEnumBundle\DBAL\Types\AbstractEnumType;

/**
 * Class AmericanFootballPositionType
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class AmericanFootballPositionType extends AbstractEnumType
{

    const CENTER             = 'C';
    const OFFENSIVE_GUARD    = 'G';
    const OFFENSIVE_TACKLE   = 'T';
    const QUARTERBACK        = 'QB';
    const RUNNING_BACK       = 'RB';
    const WIDE_RECEIVER      = 'WR';
    const TIGHT_END          = 'TE';
    const DEFENSIVE_TACKLE   = 'DT';
    const DEFENSIVE_END      = 'DE';
    const MIDDLE_LINEBACKER  = 'MLB';
    const OUTSIDE_LINEBACKER = 'OLB';
    const CORNERBACK         = 'CB';
    const SAFETY             = 'S';
    const KICKER             = 'K';
    const HOLDER             = 'H';
    const LONG_SNAPPER       = 'LS';
    const PUNTER             = 'P';
    const KICKOFF_SPECIALIST = 'KOS';
    const PUNT_RETURNER      = 'PR';
    const KICK_RETURNER      = 'KR';
    const OFFENSIVE_LINEMEN  = 'OL';
    const DEFENSIVE_LINEMEN  = 'DL';
    const LINEBACKER         = 'LB';

    protected static $choices = [
        self::CENTER             => 'Center',
        self::OFFENSIVE_GUARD    => 'Offensive guard',
        self::OFFENSIVE_TACKLE   => 'Offensive tackle',
        self::QUARTERBACK        => 'Quarterback',
        self::RUNNING_BACK       => 'Running back',
        self::WIDE_RECEIVER      => 'Wide receiver',
        self::TIGHT_END          => 'Tight end',
        self::DEFENSIVE_TACKLE   => 'Defensive tackle',
        self::DEFENSIVE_END      => 'Defensive end',
        self::MIDDLE_LINEBACKER  => 'Middle linebacker',
        self::OUTSIDE_LINEBACKER => 'Outside linebacker',
        self::CORNERBACK         => 'Cornerback',
        self::SAFETY             => 'Safety',
        self::KICKER             => 'Kicker',
        self::HOLDER             => 'Holder',
        self::LONG_SNAPPER       => 'Long snapper',
        self::PUNTER             => 'Punter',
        self::KICKOFF_SPECIALIST => 'Kickoff specialist',
        self::PUNT_RETURNER      => 'Punt returner',
        self::KICK_RETURNER      => 'Kick returner',
        self::OFFENSIVE_LINEMEN  => 'Offensive linemen',
        self::DEFENSIVE_LINEMEN  => 'Defensive linemen',
        self::LINEBACKER         => 'Linebacker',
    ];
}
