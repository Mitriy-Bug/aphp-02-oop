<?php
declare(strict_types=1);
namespace abstractСlasses;
abstract class AbsractEmployee 
{
    public array $employee = []; //массив сотрудника

    //абстрактный метод добавления фамилии и имени сотрудника
    abstract public function add_employee(string $surname, string $name, int $salary);
}