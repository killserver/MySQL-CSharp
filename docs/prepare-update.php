<h1>PrepareUpdate (+1 overload)</h1>
<br />
<h2>Описание:</h2><hr />
<pre class="brush: csharp;">
void PrepareUpdate ( string col, int val )
void PrepareUpdate ( string col, string val )
</pre>
Подготавливает обновление данных в Базы данных введённым значением.<br />
<br />
<h2>Список параметров</h2><hr />
<br />
<h3 class="perem">col</h3><span class="paragraph">Поле данные которого будут обновленны в Базы Данных</span>
<h3 class="perem">val</h3><span class="paragraph"><u>Согласно <a href="https://msdn.microsoft.com/ru-ru/library/vstudio/ms229029%28v=vs.100%29.aspx" target="_blank">перегрузке</a> переменная может быть как <b>текстовой</b>, так и <b>числовой</b>.</u></span><br /><span class="paragraph">Данная переменная указывает какими данными будет обновленно поле в Базы Данных</span>
<br />
<h2>Пример:</h2><hr />
<pre class="brush: csharp;">
using KilleR.MySqli;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {
            MySqli Test = new MySqli("127.0.0.1", "root", "", "mysql");
            Test.PrepareUpdate("test", 11);
            bool view = Test.Update("test");
            if(view) {
                Console.WriteLine("Данные в Базе данных успешно обновлены");
            } else {
                Console.WriteLine("При обновлении данных в Базе Данных произошла поломка. За дополнительной информацией - обратитесь в файл-лог.");
            }
            Console.ReadLine();
        }
    }
}
</pre>