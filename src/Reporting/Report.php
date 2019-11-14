<?php

namespace App\Reporting;

class Report
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var array
     */
    protected $data;


    /**
     * Constructeur qui reçoit la date et le titre du rapport
     *
     * @param string $date
     * @param string $title
     */
    public function __construct(string $date, string $title, array $data)
    {
        $this->date  = $date;
        $this->title = $title;
        $this->data = $data;
    }

    /**
     * Retourne un tableau associatif contenant la date et le titre du rapport
     * Indice : tiens tiens, on pourrait donc récupérer ces données depuis l'extérieur ?
     */
    public function getContents()
    {
        return [
            'date'  => $this->date,
            'title' => $this->title,
            'data' => $this->data
        ];
    }
}

// The SRP is respected now. The only reason why we might change the class is if the representation of a report has an author or something else in plus or less.


