package java;

import javax.swing.*;

public class Main {
    public static void main(String[] args) {
        // Neues Frame generieren
        JFrame MainFrame = new JFrame();
        // Wir setzen die Breite und die Höhe unseres Fensters auf die Grösse des Bildschirms
        MainFrame.setExtendedState(JFrame.MAXIMIZED_BOTH);
        JPanel MainPanel = new JPanel();
        // Text
        MainPanel.add(new JLabel("Erstes JLabel"));
        // JFileChooser-Objekt erstellen
        MainFrame.add(MainPanel);
        // Wir lassen unseren Frame anzeigen
        MainFrame.setVisible(true);
    }
}