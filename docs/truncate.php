<h1>Truncate</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
bool Truncate ( string table )
</pre>
Возвращает данные полученные из Базы данных в <a href="https://msdn.microsoft.com/ru-ru/library/xfhwa508%28v=vs.110%29.aspx" target="_blank">Ассоциативном массиве</a>.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">table</h3><span class="paragraph">Название таблицы в Базе Данных</span>
<br />
<h2>Примеры:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            bool vals = Test.Truncate("test");
            if(vals) {
                Console.WriteLine("Все данные в таблице test успешно удаленны");
            } else {
                Console.WriteLine("При попытке удалить все данные в таблице test произошла поломка. Обратитесь в файл-лог за дополнительной информацией.");
            }
            Console.ReadLine();
        }
    }
}
</pre>