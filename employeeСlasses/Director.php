<?php
declare(strict_types=1);
namespace employeeСlasses;
use abstractСlasses\AbsractEmployee;
use interfaseClass\LeadInterface;
class Director extends AbsractEmployee implements LeadInterface
{
    public string $surname; //Фамилия
    public string $name; //Имя
    public string $post = 'директор'; // Должность
    public int $salary; // зарплата
    public string $department;// руководить отдел
    

    //абстрактная функция добавления Фамилии, Имени
    public function add_employee(string $surname, string $name, int $salary)
    {
       $this->surname = $surname;
       $this->name = $name;
       $this->salary = $salary;
    }
    //интерфейсная функция добавления свойства разработка приложений
   public function manage(string $department)
   {        
        $this->department = $department;        
   }
   //метод добавления сотрудника в массив
   public function add_list()
   {
        $this->employee['Фамилия'] =  $this->surname;
        $this->employee['Имя'] = $this->name;
        $this->employee['Должность'] = " позиция: $this->post,";
        $this->employee['Зарплата'] = $this->salary;
        $this->employee['Отдел'] = " может управлять или руководить: $this->department";
        
        return $this->employee;
   }
}
