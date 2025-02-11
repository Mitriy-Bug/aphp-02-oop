<?php
declare(strict_types=1);
namespace employeeСlasses;

use abstractСlasses\AbsractEmployee;
use interfaseClass\ApplicationCreatorInterface;
use interfaseClass\WebinarSpeakerInterface;

//use interfaceСlasses\ApplicationCreatorInterface;
class Programmer extends AbsractEmployee implements ApplicationCreatorInterface, WebinarSpeakerInterface
{
    public string $surname; //Фамилия
    public string $name; //Имя
    public string $post = 'програмист'; // Должность
    public int $salary; // зарплата
    public string $development;// разработка приложений
    public string $webinar; // проведение вебинаров

    //абстрактная функция добавления Фамилии, Имени
    public function add_employee(string $surname, string $name, int $salary)
    {
       $this->surname = $surname;
       $this->name = $name;
       $this->salary = $salary;
    }

    //интерфейсная функция добавления свойства разработка приложений
   public function applicationDevelopment(string $development)
   {        
        $this->development = $development;        
   }

   //интерфейсная функция добавления свойства проведения вебинаров
   public function conductWebinars(string $webinar)
   {
    $this->webinar = $webinar;
   }

   //метод добавления сотрудника в массив
   public function add_list()
   {
        $this->employee['Фамилия'] =  $this->surname;
        $this->employee['Имя'] = $this->name;
        $this->employee['Должность'] = " позиция: $this->post,";
        $this->employee['Зарплата'] = $this->salary;
        $this->employee['Приложения'] = " может заниматься разработкой приложения: $this->development,";
        $this->employee['Вебинар'] = " может проводить вебинары: $this->webinar";
        return $this->employee;
   }
}
